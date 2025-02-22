<x-layout>
<x-slot:heading>
    Job Listing
  </x-slot:heading>

  <ul>
    @foreach ($jobs as $job)
    <li> 
      <a href="/jobs/{{ $job['id'] }}" class= "hover:underline">
      <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary']}} per year. </a>
    @endforeach
    </li>
  </ul>

</x-layout>