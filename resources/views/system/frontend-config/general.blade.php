 {{-- Name --}}
 <x-system.input :input="[
     'name' => 'name',
     'value' => $item['name'] ?? old('name'),
 ]" />

 {{-- Postiion --}}
 <x-system.input :input="[
     'name' => 'position',
     'value' => $item['position'] ?? old('position'),
 ]" />

 {{-- No. of Client --}}
 <x-system.input :input="[
     'name' => 'no_of_clients',
     'label' => 'No. of Clients',
     'placeholder' => 'No. of Clients',
     'value' => $item['no_of_clients'] ?? old('no_of_clients'),
 ]" />

 {{-- No. of Projects --}}
 <x-system.input :input="[
     'name' => 'no_of_projects',
     'label' => 'No. of Projects',
     'placeholder' => 'No. of Projects',
     'value' => $item['no_of_projects'] ?? old('no_of_projects'),
 ]" />

 {{-- About --}}
 <x-system.textarea :input="[
     'name' => 'about',
     'value' => $item['about'] ?? old('about'),
 ]" />

 {{-- Contact --}}
 <x-system.input :input="[
     'name' => 'contact',
     'type' => 'number',
     'value' => $item['contact'] ?? old('contact'),
 ]" />

 {{-- Email --}}
 <x-system.input :input="[
     'name' => 'email',
     'value' => $item['email'] ?? old('email'),
 ]" />

 {{-- Location --}}
 <x-system.input :input="[
     'name' => 'location',
     'value' => $item['location'] ?? old('location'),
 ]" />
