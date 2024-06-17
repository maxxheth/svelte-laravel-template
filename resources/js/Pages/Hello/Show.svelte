<script>
  import { Link } from '@inertiajs/svelte';
  export let hello;

  console.log({ hello })
</script>

<div>
  <h1 class="text-red-600">{hello.title}</h1>
  <p>ID: {hello.id}</p>
  <p>Start Date: {hello.start_date}</p>
  <p>Description: {hello.description}</p>
  <Link href="/">Back to home page</Link>
</div>