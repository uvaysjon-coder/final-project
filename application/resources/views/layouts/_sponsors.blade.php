<div class="container mx-auto flex justify-center mt-14">
    <div class="w-full mx-4 text-center">
        <p class="text-base mb-6 md:text-lg md:mb-12">
            We'd like to thank these <x-accent-text>amazing companies</x-accent-text> for supporting us
        </p>

        <div class="mt-6 grid grid-cols-2 gap-y-8 lg:grid-cols-3">
            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://beyondco.de" logo="{{ asset('images/sponsors/beyondcode.png') }}" company="Beyond Code" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://usefathom.com/ref/7A8QGC" logo="{{ asset('images/sponsors/fathom.png') }}" company="Fathom" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://forge.laravel.com/" logo="{{ asset('images/sponsors/forge.png') }}" company="Forge" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://envoyer.io/" logo="{{ asset('images/sponsors/envoyer.png') }}" company="Envoyer" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://akaunting.com/developers?utm_source=Laravelio&utm_medium=Banner&utm_campaign=Developers" logo="{{ asset('images/sponsors/akaunting.png') }}" company="Akaunting" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://larajobs.com" logo="{{ asset('images/sponsors/larajobs.svg') }}" company="LaraJobs" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://ter.li/vj4bxb" logo="{{ asset('images/sponsors/scout-apm.jpg') }}" company="Scout APM" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://www.cloudways.com/en/?id=972670" logo="{{ asset('images/sponsors/cloudways.png') }}" company="Cloudways" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://loadforge.com" logo="{{ asset('images/sponsors/loadforge.svg') }}" company="LoadForge" />
            </div>
            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://www.skynettechnologies.com/hire-laravel-developer" logo="{{ asset('images/sponsors/skynet-technologies.jpg') }}" company="Skynet Technologies" />
            </div>

            <div class="col-span-2 flex justify-center lg:col-span-1">
                <x-sponsor-logo url="https://www.lightflows.co.uk/laravel-development-agency/" logo="{{ asset('images/sponsors/lightflows.png') }}" company="Lightflows" />
            </div>
        </div>

        <x-ads.cta primary class="mt-8 md:mt-12">
            Your logo here?
        </x-ads.cta>
    </div>
</div>
