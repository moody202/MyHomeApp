
<?php

?>

<nav aria-label="...">
    <ul class="pagination">
      <li class="page-item ">
        <a class="page-link" href="{{ route('trashed') }}"><x-button>Previous</x-button></a>
      </li>

      <li class="page-item"><a class="page-link" href="{{ route('products.index') }}">
        <x-button>Next</x-button></a>
      </li>
    </ul>
  </nav>
