<div class="row mt-4 text-center" wire:ignore.self>
    <!-- View Count -->
    <div class="col-4">
        <p class="mb-1 text-secondary text-xs">Viewers</p>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#008ddc">
            <path d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 120q-105 0-192.5-57T120-420q42-103 129.5-160T480-640q105 0 192.5 57T840-420q-42 103-129.5 160T480-240Z"/>
        </svg>
        <p class="mt-1 text-info">{{ $viewCount }}</p>
    </div>

    <!-- Like -->
    <div class="col-4" wire:ignore>
        <p class="mb-1 text-secondary text-xs">Likes</p>
        <button id="likeBtn" class="btn-icon border-0 bg-transparent" wire:click="like">
            <svg id="likeIcon" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#000000">
                <path d="M120-280v-320h160v320H120Zm240 0v-320h112v-240l272 240h-144v320H360Z"/>
            </svg>
            <p id="likeCount" class="mt-1 text-secondary">{{ $likeCount }}</p>
        </button>
    </div>

    <!-- Dislike -->
    <div class="col-4" wire:ignore>
        <p class="mb-1 text-secondary text-xs">Dislikes</p>
        <button id="dislikeBtn" class="btn-icon border-0 bg-transparent" wire:click="dislike">
            <svg id="dislikeIcon" xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#000000">
                <path d="M120-360v-320h160v320H120Zm240 0v-320h112v-240l272 240H600v320H360Z"/>
            </svg>
            <p id="dislikeCount" class="mt-1 text-secondary">{{ $dislikeCount }}</p>
        </button>
    </div>
</div>

<!-- JavaScript interaktif -->
@push('scripts')
<script>
    document.addEventListener('livewire:load', () => {
        const likeBtn = document.getElementById('likeBtn');
        const dislikeBtn = document.getElementById('dislikeBtn');

        likeBtn?.addEventListener('click', () => {
            setTimeout(() => {
                const icon = document.getElementById('likeIcon');
                const count = document.getElementById('likeCount');
                const isActive = count.classList.contains('text-success');

                icon.setAttribute('fill', isActive ? '#000000' : '#75FB4C');
                count.classList.toggle('text-success');
                count.classList.toggle('text-secondary');
            }, 150);
        });

        dislikeBtn?.addEventListener('click', () => {
            setTimeout(() => {
                const icon = document.getElementById('dislikeIcon');
                const count = document.getElementById('dislikeCount');
                const isActive = count.classList.contains('text-danger');

                icon.setAttribute('fill', isActive ? '#000000' : '#EA3323');
                count.classList.toggle('text-danger');
                count.classList.toggle('text-secondary');
            }, 150);
        });
    });
</script>
@endpush
