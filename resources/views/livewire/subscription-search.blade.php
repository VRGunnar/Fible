<div>
    <div class="w-4/5 m-auto mb-8 search:mb-8 search:h-6 search:max-w-2xl">
            <svg class="w-6 h-6 inline ml-3 search:hidden" id="filter_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.68 16.45"><defs><style>.cls-1{fill:#c72e2e;}</style></defs><path id="Icon_material-filter-list" class="fill-fGrey" d="M9.6,16.45h5.49v-2.74h-5.49v2.74ZM0,0V2.74H24.68V0H0ZM4.11,9.6H20.57v-2.74H4.11v2.74Z"/></svg>

        <input class="inline text-xs p-2 float-right w-10/12 mx-2 rounded-3xl pl-4 ml-0 drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] search:float-none search:m-auto search:block" wire:keyup="search" wire:model="search" type="text" name="search" id="search" placeholder="Zoek naar kortingen" >
        <svg class="w-5 h-5 absolute right-16 top-24 stroke-0 mt-0.5 search:hidden" xmlns="http://www.w3.org/2000/svg" width="20.591" height="20.496" viewBox="0 0 20.591 20.496">
            <path id="magnifying_glass_icon" data-name="magnifying_glass_icon" d="M18.734,16.423l-3.7-3.7a.89.89,0,0,0-.631-.26h-.6A7.713,7.713,0,1,0,12.465,13.8v.6a.89.89,0,0,0,.26.631l3.7,3.7a.887.887,0,0,0,1.258,0l1.05-1.05a.9.9,0,0,0,0-1.261ZM7.716,12.465a4.748,4.748,0,1,1,4.748-4.748A4.746,4.746,0,0,1,7.716,12.465Z" transform="translate(0.75 0.75)" fill="#707070" stroke="#fff" stroke-width="1.5"/>
        </svg>
    </div>

    @if($search)
    <p class="text-sm w-80 m-auto">Zoeken naar: <em>{{ $search }}</em></p>
    @endif

    <div class="bg-fWhite" data-tab="subscriptions">
    @foreach($subscription as $s)
    <div class="bg-fWhite">
        <div class="w-80 h-28 bg-white rounded-bl-xl rounded-tr-xl drop-shadow-[0_3px_6px_rgba(0,0,0,0.16)] m-auto my-4 min-h-28">
            <div class="float-left w-3/5">
                <h1 class="text-sm w-3/4 m-auto mt-3 h-12">{{$s->title}}</h1>
                <button class="text-white uppercase bg-fGreen border-none text-xs tracking-wide py-2 px-3 rounded-3xl ml-8 w-2/3 mt-2"><a href="/discounts/subscription/{{ $s->id }}">gebruik</a></button>
            </div>
            <div class="float-right w-2/5">
                <img class="w-36 h-28 rounded-tr-xl object-cover" src="{{$s->logo}}" alt="image">
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
