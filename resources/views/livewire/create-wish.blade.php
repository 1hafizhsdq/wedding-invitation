<div>
    {{-- <label for="sampleInput">Nama</label>
    <input wire:model="name" class="u-fullwidth" type="text" value="" placeholder="Nama anda" name="name" required>
    @error('name')
    <div class="alert-box alert-box--error">
        <p>{{ $message }}</p>
        <span class="alert-box__close"></span>
    </div>
    @enderror

    <label for="exampleMessage">Ucapan & doa</label>
    <textarea wire:model="comment" class="u-fullwidth" placeholder="Ucapan anda" name="comment" required></textarea>
    @error('comment')
    <div class="alert-box alert-box--error">
        <p>{{ $message }}</p>
        <span class="alert-box__close"></span>
    </div>
    @enderror
    <button wire:click="createWish" class="btn--primary u-fullwidth">Kirim Ucapan</button> --}}
    <div>
        <label for="name" class="block text-[#3A4A3A] font-medium mb-2">Your Name</label>
        <input type="text" id="name" wire:model="name" name="name" required placeholder="Enter your name" 
            class="w-full px-4 py-3 border border-[#E0E0E0] rounded-lg focus:outline-none focus:ring-1 focus:ring-[#C6B264] focus:border-[#C6B264]">
            @error('name')
            <div class="alert-box alert-box--error">
                <p>{{ $message }}</p>
                <span class="alert-box__close"></span>
            </div>
            @enderror
    </div>
    
    <div>
        <label for="message" class="block text-[#3A4A3A] font-medium mb-2">Your Message</label>
        {{-- <textarea id="message" rows="4" placeholder="Write your wishes here." 
                class="w-full px-4 py-3 border border-[#E0E0E0] rounded-lg focus:outline-none focus:ring-1 focus:ring-[#C6B264] focus:border-[#C6B264]"></textarea> --}}
        <input type="text" id="comment" wire:model="comment" name="Comment" required placeholder="Leave your message here"
                class="w-full px-4 py-3 border border-[#E0E0E0] rounded-lg focus:outline-none focus:ring-1 focus:ring-[#C6B264] focus:border-[#C6B264]">
        </div>
        @error('comment')
        <div class="alert-box alert-box--error">
            <p>{{ $message }}</p>
            <span class="alert-box__close"></span>
        </div>
        @enderror
    
    <div class="pt-4">
        <button wire:click="createWish" class="w-full bg-[#76856A] text-white py-3 rounded-lg hover:bg-[#5a6a55] transition-colors duration-300">
            Send Wishes
        </button>
    </div>
</div>