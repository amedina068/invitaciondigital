<x-guest-layout>
    <x-slot name="head">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
    </x-slot>

    <x-inner-menu-section
        logo
        background-color="#52323D"
        text-color="#ECA98E"
        demo
    />

    <x-hero-section demo="2" />

    <x-save-the-date-section
        src="/img/demo-hero.png"
        demo="2"
    />

    <x-dress-code-section
        title-font="Rochester"
        item-heading-color="#52323D"
        item-title-color="#52323D"
        item-description-color="#ECA98E"
        background-color="#FFFFFF"
        demo
    />
    <x-date-place-section
        title-font="Rochester"
        title-color="#52323D"
        item-title-color="#FFFFFF"
        item-place-color="#FFFFFF"
        item-hour-color="#503637"
        item-address-color="#503637"
        item-maps-link-color="#52323D"
        background-color="#ECA98E"
        subtitle="Queremos que esta fecha sea muy especial por lo que te pedimos la mantengas Child Free."
        text="center"
        demo
    />
    <x-moments-section demo="2" title-font="Rochester" />
    <x-parents-section demo="2" />
    <x-timeline-section demo="2" />
    <x-gifts-section demo title-font="Rochester" title-color="#52323D" background-color="#ECA98E" />
    <x-confirmation-section demo />
</x-guest-layout>