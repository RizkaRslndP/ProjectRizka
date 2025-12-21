<div class="flex flex-wrap gap-2 justify-start md:justify-end">

    <!-- Facebook -->
    <a href="#" target="_blank"
        class="inline-flex items-center gap-2
          bg-gradient-to-r from-[#77A1D3] via-[#79CBCA] to-[#77A1D3]
          bg-[length:200%_auto]
          text-white text-sm font-semibold uppercase
          px-5 py-2.5 rounded-lg
          shadow-md
          transition-all duration-500
          hover:bg-[position:right_center]">

        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <path d="M7 10l5 5 5-5" />
            <path d="M12 15V3" />
        </svg>

        Download PDF
    </a>
</div>

@push('js')
    <script>
        function copyLink() {
            navigator.clipboard.writeText("{{ url()->current() }}");
        }
    </script>
@endpush
