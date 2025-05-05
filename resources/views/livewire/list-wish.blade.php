<div>
    {{-- @foreach ($wish as $item)
    <div class="alert-box alert-box--notice">
        <span><b>{{ $item->name }}</span></b>
        <br>
        <span>{{ $item->comment }}</span>
    </div>
    @endforeach --}}
    @foreach ($wish as $item)
        <div class="pb-6 border-b border-[#F0F0F0]">
            <h4 class="font-bold text-[#3A4A3A]">{{ $item->name }}</h4>
            <p class="text-[#76856A] mt-2">{{ $item->comment }}</p>
        </div>
    @endforeach
</div>