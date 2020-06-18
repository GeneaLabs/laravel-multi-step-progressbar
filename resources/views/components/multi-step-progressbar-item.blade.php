<div class="relative w-full flex flex-grow justify-center">
    <div
        class="absolute w-1/2 h-full left-0 bg-repeat-x bg-top top-0"
        style="background-image: url({{ $imageForLeftBar }}); background-repeat: repeat-x;"
    ></div>
    <div
        class="absolute w-1/2 h-full bg-repeat-x bg-top top-0"
        style="left: 50%; background-image: url({{ $imageForRightBar }}); background-repeat: repeat-x;"
    ></div>
    <div
        class="flex flex-col items-center justify-start"
    >
        @if ($step <= $canJumpToStep && $step !== $currentStep)
            <a
                aria-label="{{ $stepData["step-{$step}"]["title"] }}"
                data-balloon-pos="down"
                href="{{ $stepData["step-{$step}"]["url"] }}"
            >
                <img src="{{ $imageForBubble }}">
            </a>
        @elseif ($step !== $currentStep)
            <div
                aria-label="{{ $stepData["step-{$step}"]["title"] }}"
                data-balloon-pos="down"
                style="cursor: default !important;"
            >
                <img src="{{ $imageForBubble }}">
            </div>
        @else
            <img
                src="{{ $imageForBubble }}"
                class="z-10"
            >
        @endif

        @if ($step == $currentStep)
            <div
                class="m-0 p-0 whitespace-no-wrap font-bold"
            >
                {{ $stepData["step-{$step}"]["title"] }}
            </div>
            <p
                class="m-0 p-0 text-sm italic"
            >
                {{ $stepData["step-{$step}"]["description"] }}
            </p>
        @endif
    </div>
</div>
