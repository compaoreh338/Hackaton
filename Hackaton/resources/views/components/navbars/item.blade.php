@props(['route', 'title'])
<li>
    <a href="{{ route($route) }}"
       class="block py-2 pl-3 pr-4 {{request()->routeIs($route . '*') ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent'}}"
       aria-current="page">{{ $title }}</a>
</li>
