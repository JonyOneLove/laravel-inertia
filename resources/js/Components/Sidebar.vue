<script setup>
import { Link, router } from "@inertiajs/vue3";

const logout = () => {
    router.post(route("logout"));
};
</script>

<template>
    <aside class="py-6 px-10 w-64 border-r border-gray-200">
        <Link href="/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 216.6 35">
                <path
                    d="M31.5 0h-28C1.6 0 0 1.5 0 3.5v28c0 2 1.6 3.5 3.5 3.5h28c1.9 0 3.5-1.5 3.5-3.5v-28c0-2-1.5-3.5-3.5-3.5zM29 13.4c-.2-.1-.4-.3-.6-.1.1.1.3.2.5.3.1.4-.4.6-.7.3-.6-.6-1.4-.4-2.1-.6-.5-.1-1 1.8-1.3 2.3-.1.6-.2 1.2-.4 1.7 0 .4 1.1.6 1.5 1 1.9 1 1.5 1.5-.1 2.5-.9.5-1.6 1.4-2.7 1.6-1.7 0-2.3.2-.7-1.3.2.1.5.7.8.4.7-.5 1.6-1 2.4-1.5.9-.4-1.8-1-2.1-1.2-.5-.1-1 .1-1.2.5-.7 1.6-1.5 3.2-2 4.9-.4 1 .6 1.5.7 2.4-.5-.3-1.1-.5-1.6-.7.3-1.1.1-.7-.1-1.6.6-.9.8-1.9.8-2.9-.2-.6 1-2 .4-2.3-5.7-1.1-3.4-2.4-5.9.9-.9 1 3.8 3.2 3.3 4.9-.4-.2-1.4-.3-1.4-.7 0-.5 0-.5-.4-.6-.9-.9-1.4-2-2.6-2.5-1.6-.5-.4-1.2-.1-2.1-.7 0-1.4.3-2.2.1-.4 0-.8-.1-.9.5-.1 1 .1 3-.9 3.5-.6.2-1.2.6-1.8.6.9-2.2.4-.9 1.6-1.5 0-.1-.1-.4-.1-.5.2-1.2.2-2.4.1-3.5 0-.3.3-.5.6-.5 3.5 0-.1-2 1.8-4.2-2.6-.7-1.1 3.7-5.1 6.4-1 .5-.4-1.5.2-1.6 1.3-.8 1.4-2.4 1.9-3.6.6-1.4 2.1-2.4 3.6-1.9.2.1.4.1.5-.1.9-.6 1.9-.7 3-.4 1.7.5 3.7 1.9 5.4.7h-.4v-.1c.1-.2.7-.4.5-.7.5-.3 1-.6 1.4-.8 0-.1 0-.1-.5.1 0-.4.3-.4.5-.6-.1-.1-.1-.1-.2-.1.5-.3 1-.5 1.7-.6V10c-.1 0-.1 0-.3-.1.1-.3.6-.2.8-.5h-.4c.2-.2.5-.1.9-.1s.8-1.1 1-.6c-.1 1.3 1.5 1.5 2.1 2.4.6.7 1.5 1.1 1.9 2.1-.6.1-.8.3-1.1.2zm22 13.4V8.9h2.5L57 19.5c0 .2.2.5.3.8.1.4.2.7.3 1.1-.1-.5-.2-1-.2-1.5s-.1-.8-.1-1v-10h2.6v18h-2.6L53.9 17v-.2c-.3-.7-.4-1.3-.5-1.8.1.6.2 1.1.3 1.5s.1.7.1.9v9.4H51zM66.8 13c0-1.4.4-2.5 1.2-3.4.8-.8 1.8-1.2 3.2-1.2 1.3 0 2.3.4 3.1 1.3.8.8 1.1 1.9 1.1 3.3v9.2c0 1.5-.3 2.8-1.1 3.6s-1.8 1.3-3.2 1.3c-1.4 0-2.4-.4-3.2-1.3-.7-.9-1.1-2.1-1.1-3.7V13zm5.7 9.9v-10c0-.6-.1-1.1-.3-1.4s-.6-.5-1.1-.5c-.4 0-.8.1-1.1.4s-.3.8-.3 1.4v10c0 .6.1 1.1.3 1.4s.6.5 1.1.5c.4 0 .8-.1 1.1-.5s.3-.7.3-1.3zm9.9 3.9V8.9h3.7l1.8 9.9c.1.4.2.8.2 1.3.1.5.1 1 .1 1.4 0-.4 0-.9.1-1.3.1-.5.1-.9.2-1.4l1.8-9.9h3.8v18h-2.6V15.4c0-.3 0-.8.1-1.3s.1-1.1.2-1.8c-.1.3-.1.6-.2 1-.2.8-.2 1.3-.3 1.6L89 26.8h-1.4l-2.2-11.9c-.1-.5-.2-1-.3-1.6-.1-.6-.2-.9-.2-.9.1.6.1 1.2.2 1.7.1.6.1 1 .1 1.4v11.4l-2.8-.1zm17.6 0l2.9-18h3.6l2.9 18h-2.8l-.6-3.9h-2.8l-.6 3.9H100zm3.7-6.4h2.1l-.9-7.5h-.2l-1 7.5zm12 6.4V8.9h3.9c1.5 0 2.7.4 3.4 1.2s1.1 2.1 1.1 3.7v8c0 1.8-.3 3-1.1 3.8-.7.8-1.8 1.2-3.3 1.2h-4zm2.7-2.7h1.4c.5 0 .8-.1 1.1-.5.3-.3.3-.8.3-1.5v-8.6c0-.8-.2-1.3-.6-1.6-.3-.4-.9-.5-1.7-.5h-.7l.2 12.7zm12.8 2.7V8.9h2.8v18c0-.1-2.8-.1-2.8-.1zm9.9-4.6V13c0-1.4.4-2.5 1.1-3.4s1.9-1.2 3.2-1.2c1.3 0 2.3.4 3.1 1.3.8.8 1.1 1.9 1.1 3.3v1.8h-2.9v-1.9c0-.6-.1-1.1-.4-1.4-.3-.3-.6-.4-1.1-.4s-.9.1-1.1.4c-.3.3-.4.8-.4 1.4v10c0 .6.1 1.1.4 1.4s.6.5 1.1.5.9-.1 1.1-.5c.3-.3.4-.8.4-1.4v-2.5h2.9v1.9c0 1.5-.4 2.8-1.1 3.6s-1.8 1.3-3.1 1.3c-1.4 0-2.4-.4-3.1-1.3s-1.2-2.1-1.2-3.7zm24.3.1l2.6-.4c.1.9.2 1.6.5 2s.8.6 1.3.6.9-.1 1.3-.5c.3-.3.4-.8.4-1.3 0-1-.8-2.1-2.3-3.6l-.3-.3c-1.4-1.5-2.4-2.6-2.8-3.4-.4-.8-.6-1.6-.6-2.5 0-1.3.4-2.4 1.3-3.2.9-.9 1.9-1.3 3.1-1.3 1.1 0 2.1.4 2.9 1.2s1.1 1.9 1.3 3.3l-2.7.4c-.1-.8-.2-1.4-.4-1.8s-.6-.5-1.1-.5c-.4 0-.8.1-1.1.4s-.4.7-.4 1.2c0 1.1.9 2.4 2.6 4.1l.1.1c1.3 1.3 2.1 2.3 2.5 3s.6 1.6.6 2.6c0 1.3-.4 2.4-1.2 3.2s-1.9 1.3-3.1 1.3c-1.4 0-2.4-.5-3.3-1.3-.7-.6-1.2-1.8-1.2-3.3zm15-9.3c0-1.4.4-2.5 1.1-3.4s1.9-1.2 3.2-1.2c1.3 0 2.3.4 3.1 1.3.8.8 1.1 1.9 1.1 3.3v9.2c0 1.5-.4 2.8-1.1 3.6s-1.8 1.3-3.1 1.3c-1.4 0-2.4-.4-3.1-1.3s-1.1-2.1-1.1-3.7V13zm5.7 9.9v-10c0-.6-.1-1.1-.4-1.4-.3-.3-.6-.4-1.1-.4s-.9.1-1.1.4c-.3.3-.4.8-.4 1.4v10c0 .6.1 1.1.4 1.4s.6.5 1.1.5.9-.1 1.1-.5c.3-.3.4-.8.4-1.4zm10 3.9V8.9h7.2v2.6h-4.4v4.7h3.2v2.6h-3.2v8.1c-.1-.1-2.8-.1-2.8-.1zm12-15.4V8.9h8.5v2.6h-2.9v15.4h-2.8V11.4h-2.8z"
                    fill="#4f46e5"
                />
            </svg>
        </Link>

        <ul class="flex flex-col gap-y-6 pt-20">
            <li>
                <Link
                    href="/dashboard"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Dashboard',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 fill-current"
                        fill="currentColor"
                        width="24"
                        height="24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path
                            d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                        ></path>
                    </svg>
                    <span>Overview</span>
                </Link>
            </li>
            <li>
                <Link
                    href="/dashboard/projects"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Projects/Index',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
                        />
                    </svg>
                    <span>Projects</span>
                </Link>
            </li>
            <li>
                <Link
                    href="/dashboard/links"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Links/Index',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="24"
                        height="24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"
                        />
                    </svg>
                    <span>Links</span>
                </Link>
            </li>
            <li>
                <Link
                    href="/dashboard/platforms"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Platforms/Index',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="24"
                        height="24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"
                        />
                    </svg>
                    <span>Platforms</span>
                </Link>
            </li>
            <li>
                <Link
                    href="/dashboard/contractors"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Contractors/Index',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="24"
                        height="24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                        />
                    </svg>
                    <span>Contractors</span>
                </Link>
            </li>
            <li>
                <Link
                    href="/dashboard/orders"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                    :class="{
                        active: $page.component === 'Orders/Index',
                    }"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        width="24"
                        height="24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                        />
                    </svg>

                    <span>Orders</span>
                </Link>
            </li>
        </ul>

        <ul class="flex flex-col gap-y-6 pt-20">
            <li>
                <a
                    href="#"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        width="24"
                        height="24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 fill-current"
                    >
                        <path
                            opacity=".3"
                            d="M18.622 9.75h.128a2.25 2.25 0 0 1 0 4.5h-.064a.488.488 0 0 0-.447.295.488.488 0 0 0 .089.54l.044.044a2.25 2.25 0 1 1-3.182 3.184l-.04-.04a.49.49 0 0 0-.545-.094.487.487 0 0 0-.295.444v.127a2.25 2.25 0 0 1-4.5 0 .524.524 0 0 0-.363-.514.485.485 0 0 0-.532.092l-.044.044a2.25 2.25 0 1 1-3.184-3.182l.04-.04a.49.49 0 0 0 .094-.545.487.487 0 0 0-.443-.295H5.25a2.25 2.25 0 0 1 0-4.5.524.524 0 0 0 .514-.363.485.485 0 0 0-.092-.532l-.045-.044A2.25 2.25 0 1 1 8.81 5.687l.04.04c.142.139.355.177.537.097l.108-.023a.486.486 0 0 0 .255-.423V5.25a2.25 2.25 0 0 1 4.5 0v.065c0 .194.117.37.303.449.182.08.395.042.532-.092l.044-.045a2.25 2.25 0 1 1 3.184 3.183l-.04.04a.488.488 0 0 0-.097.537l.023.108a.486.486 0 0 0 .423.255Z"
                            fill="currentColor"
                        ></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                            fill="currentColor"
                        ></path>
                    </svg>

                    <span>Settings</span>
                </a>
            </li>
            <li>
                <Link
                    @click="logout"
                    class="flex gap-x-4 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                >
                    <span
                        class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out"
                    />
                    <svg
                        width="24"
                        height="24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 fill-current"
                    >
                        <path
                            opacity=".3"
                            d="M16 17a1 1 0 1 1 2 0v1a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4h8.007a4 4 0 0 1 4 4v1a1 1 0 0 1-2 0V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1Z"
                            fill="currentColor"
                        ></path>
                        <path
                            opacity=".3"
                            d="M21 11a1 1 0 1 1 0 2H11a1 1 0 1 1 0-2h10Z"
                            fill="currentColor"
                        ></path>
                        <path
                            d="m21.586 12-2.293 2.293a1 1 0 0 0 1.414 1.414l3-3a1 1 0 0 0 0-1.414l-3-3a1 1 0 1 0-1.414 1.414L21.586 12Z"
                            fill="currentColor"
                        ></path>
                    </svg>

                    <span>Logout</span>
                </Link>
            </li>
        </ul>
    </aside>
</template>

<script>
export default {
    name: "Sidebar",
};
</script>
