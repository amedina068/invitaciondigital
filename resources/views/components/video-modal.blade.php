<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="openModal">
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  <div class="fixed inset-0 z-10 overflow-y-auto">
    
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <div class="relative transform  transition-all ">
        <div class="flex justify-end">
            <button class="text-4xl font-medium text-gray-100" x-on:click="openModal = false; document.getElementById('{{ $id }}').pause()">&times;</button>
        </div>
        <video id="{{ $id }}" class="w-full max-w-7xl h-auto rounded-lg overflow-hidden shadow-xl" controls>
            <source src="{{ $src }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</div>
