@php
$clients = [
  ['name' => 'Apple', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'],
  ['name' => 'Google', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg'],
  ['name' => 'Microsoft', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg'],
  ['name' => 'Amazon', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg'],
  ['name' => 'Meta', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg'],
];

// Tripled to ensure smooth infinite scrolling
$tripled = array_merge($clients, $clients, $clients);
@endphp

<section class="ct-section">
    <div class="ct-header">
        <h2 class="ct-title">
            Our <span class="ct-accent">Clients</span>
        </h2>
    </div>

    <div class="ct-viewport">
        <div class="ct-track">
            @foreach($tripled as $client)
                <div class="ct-card">
                    <div class="ct-icon">
                        <img src="{{ $client['logo'] }}" alt="{{ $client['name'] }} logo">
                    </div>
                    <span class="ct-label">{{ $client['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
