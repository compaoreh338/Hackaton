@php use App\Helpers\AvailabilityOptionsHelper; @endphp
@props([
    'availabilitiesOptions' => AvailabilityOptionsHelper::all(),
    'availabilities' => $availabilities ?? [],
])

<script>
    const availabilities = {!! json_encode($availabilities) !!};
</script>

@foreach($availabilitiesOptions as $key => $availabilityOption)
    <div class="mb-4 flex w-full flex-col last:mb-0 sm:flex-row sm:px-0"
         x-data="{
            timeIntervals: [],
            timeEntries: [],
            nextKey: 0,
            currentDay: {{$key}},
            init: function() {
                // We check whether we have an existing availability for this day

                if (availabilities[this.currentDay] !== undefined) {
                    // we loop around the availabilities
                    for (const [_, timeInterval] of Object.entries(availabilities[this.currentDay])) {
                        // we loop around the time entries
                        this.addTimeEntry(timeInterval)
                    }
                } else {
                    // add default time entry
                    this.addTimeEntry()
                }

                this.timeIntervals = this.getTimeIntervals();
            },
            getTimeIntervals: function () {
                const timeIntervals = [];

                for (let hour = 0; hour < 24; hour++) {
                    for (let minute = 0; minute < 60; minute += 15) {
                        const time = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
                        timeIntervals.push(time);
                    }
                }
                return timeIntervals
            },
            addTimeEntry: function (timeInterval = {start_time: '08:00', end_time: '17:00'}) {
                timeInterval.key = this.nextKey
                this.timeEntries.push(timeInterval);
                this.nextKey++;
            },
            removeTimeEntry: function (key) {
                const index = this.timeEntries.findIndex(object => {
                  return object.key === key;
                })
                this.timeEntries.splice(index, 1);
            },
            open:  {{ count($availabilities) === 0 ? (($key < 6) ? 'true' : 'false') : (array_key_exists($key, $availabilities) ? 'true' : 'false') }}
         }">

        <div class="flex h-[36px] items-center justify-between sm:w-32">
            <div class="align-self-center flex">
                <label class="relative inline-flex items-center mr-5 cursor-pointer">
                    <input type="checkbox" value="{{$key}}" name="availabilities[{{$key}}]" class="sr-only peer"
                           x-on:click="open = !open"
                            x-bind:checked="open">
                    <div
                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-gray-300 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    <span
                        class="ml-3 text-sm font-medium text-gray-900">{{$availabilityOption['label']}}</span>
                </label>
            </div>
        </div>

        <div x-show="open">
            <div class="flex sm:ml-2">
                <div class="flex flex-col gap-4">
                    <template x-for="timeEntry in timeEntries" :key="timeEntry.key">
                        <div class="flex items-center">
                            <div class="inline-block w-[110px]">
                                <select id="start_time" :name="'availabilities[{{$key}}][' + timeEntry.key + '][start]'"
                                        :disabled="!open"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    <template x-for="time in timeIntervals">
                                        <option x-text="time" :key="time"
                                                x-bind:selected="time == timeEntry.start_time"></option>
                                    </template>
                                </select>
                            </div>
                            <span class="text-default mx-2 w-2 self-center"> - </span>
                            <div class="inline-block w-[110px]">
                                <select id="end_time" :name="'availabilities[{{$key}}][' + timeEntry.key + '][end]'"
                                        :disabled="!open"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    <template x-for="time in timeIntervals">
                                        <option x-text="time" :key="time"
                                                x-bind:selected="time == timeEntry.end_time"></option>
                                    </template>

                                </select>
                            </div>
                            <template x-if="timeEntry.key === 0">
                                <button class="w-[20px] ml-3" type="button"
                                        @click="addTimeEntry()">
                                    <svg aria-hidden="true"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="1.5"
                                         viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m6-6H6"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </template>
                            <template x-if="timeEntry.key > 0">
                                <button class="w-[20px] ml-3" type="button"
                                        @click="removeTimeEntry(timeEntry.key)">

                                    <svg aria-hidden="true" fill="none" stroke="red" stroke-width="1.5"
                                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 12H6" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </template>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
@endforeach
