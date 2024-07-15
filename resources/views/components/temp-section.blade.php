<div class="bg-background rounded-lg border p-6 w-full max-w-md flex flex-col items-center justify-center gap-4">
    <div class="text-3xl font-bold text-primary" id="clock"></div>
</div>

@push('scripts')
<script>
    function updateClock() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const day = now.getDate().toString().padStart(2, '0');
        const month = (now.getMonth() + 1).toString().padStart(2, '0');
        const year = now.getFullYear();

        const formattedTime = `${hours}:${minutes}:${seconds}`;
        const formattedDate = `${day}/${month}/${year}`;

        document.getElementById('clock').textContent = `${formattedTime} - ${formattedDate}`;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial update
    updateClock();
</script>
@endpush
