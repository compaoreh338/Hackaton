@props(['for', 'default'])
<script>
    function tabs() {
        return {
            init() {
                const selectedTab = sessionStorage.getItem(document.location.pathname)
                this.selectedTab = selectedTab ? selectedTab : this.defaultSelectedTab

                // Set the missing hash
                if (window.location.hash === '') {
                    window.location.hash = '#' + this.selectedTab;
                }
            },
            defaultSelectedTab: '{{ $default }}',
            selectedTab: '',
            isActive(tab) {
                return window.location.hash
                    ? window.location.hash === '#' + tab
                    : tab === this.selectedTab;
            },
            setActive(value) {
                // we store the value in the session storage
                sessionStorage.setItem(document.location.pathname, value)
                window.location.hash = '#' + value;
            }
        }
    }
</script>

<ul id="myTab" x-data="tabs"
    data-tabs-toggle="#{{ $for }}"
    role="tablist"
    class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-gray-200 dark:border-gray-700">
    {{ $slot }}
</ul>
