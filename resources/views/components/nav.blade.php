<nav class="fixed bottom-0 w-full bg-fWhite">
    <ul class="text-sm w-5/5 m-auto flex justify-center pt-1 sm:max-w-2xl sm:m-auto">
        <li class="opt text-xxs uppercase text-fBlack font-medium tracking-widest px-3 pl-4 py-3 w-1/3">
            <a class="" href="/discounts">
            <svg class="opt w-5 h-5 m-auto fill-fGrey {{ (request()->is('discounts')) ? 'active_opt' : '' }} hover:fill-fGreen" id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.17 33.17"><defs></defs><path d="M31.29,1.84h0c.7,.7,.7,1.9,0,2.6L4.49,31.34c-.7,.7-1.9,.7-2.6,0h0c-.7-.7-.7-1.9,0-2.6L28.69,1.84c.7-.7,1.9-.7,2.6,0Z"/><circle cx="7.59" cy="7.59" r="5.84"/><circle cx="25.59" cy="25.59" r="5.84"/></svg>
        </a>
        </li>
        <li class="opt text-xxs uppercase text-fBlack font-medium tracking-widest px-3 py-3 w-1/3">
            <a href="/">
            <svg class="opt w-5 h-5 m-auto fill-fGrey {{ (request()->is('/')) ? 'active_opt' : '' }} hover:fill-fGreen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40.01"><defs></defs><polyline id="primary" points="38 20 20 2 2 20"/><path id="primary-2" d="M34,16v20.6c-.07,.84-.82,1.47-1.66,1.4h-7.74v-13.8H15.4v13.8H7.66c-.84,.07-1.59-.56-1.66-1.4V16"/></svg>
            </a>
        </li>
        <li class="opt text-xxs uppercase text-fBlack font-medium tracking-widest px-3 pr-4 py-3 w-1/3">
            <a href="/profile">
            <svg class="opt w-5 h-5 m-auto fill-fGrey {{ (request()->is('profile')) ? 'active_opt' : '' }} hover:fill-fGreen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 40"><defs></defs><path class="active:fill-green-700" id="primary" d="M26,10c0,4.42-3.58,8-8,8s-8-3.58-8-8S13.58,2,18,2s8,3.58,8,8Zm0,16H10c-4.42,0-8,3.58-8,8h0c0,2.21,1.79,4,4,4H30c2.21,0,4-1.79,4-4h0c0-4.42-3.58-8-8-8Z"/></svg>
            </a>
        </li>
    </ul>
</nav> 