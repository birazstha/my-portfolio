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

 {{-- Service --}}
 <x-system.textarea :input="[
     'label' => 'What I Do?',
     'name' => 'service_section',
     'value' => $item['service_section'] ?? old('service_section'),
 ]" />

 {{-- Skills --}}
 <x-system.textarea :input="[
     'label' => 'Why Choose me?',
     'name' => 'skills_section',
     'value' => $item['skills_section'] ?? old('skills_section'),
 ]" />

 {{-- Portfolio --}}
 <x-system.textarea :input="[
     'label' => 'Check My Works.',
     'name' => 'portofolio_section',
     'value' => $item['portofolio_section'] ?? old('portofolio_section'),
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
