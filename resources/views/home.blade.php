@extends('layouts.app')

@section('title', $headline)

@section('content')
<!-- Hero/About Section -->
<section id="about" class="hero-section">
    <div class="container">
        <h2 class="hero-title">{{ $headline }}</h2>
        <p class="hero-intro">{{ $introduction }}</p>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills-section">
    <div class="container">
        <h2 class="section-title">Skills & Expertise</h2>
        <div class="skills-grid">
            @foreach($skills as $skillGroup)
            <div class="skill-card">
                <h3>{{ $skillGroup['category'] }}</h3>
                <ul class="skill-list">
                    @foreach($skillGroup['items'] as $skill)
                    <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="highlights">
            <h3>Professional Highlights</h3>
            <ul class="highlights-list">
                @foreach($highlights as $highlight)
                <li>{{ $highlight }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience-section">
    <div class="container">
        <h2 class="section-title">Professional Experience</h2>
        <div class="experience-grid">
            @foreach($experience as $exp)
            <div class="experience-card">
                <h3>{{ $exp['company'] }}</h3>
                <p>{{ $exp['role'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section">
    <div class="container">
        <h2 class="section-title">Project Portfolio</h2>
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <h3>{{ $project['name'] }}</h3>
                <p>{{ $project['description'] }}</p>
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="project-link">Visit Website →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <h2 class="section-title">Client Testimonials</h2>
        <div class="testimonials-grid">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-card">
                <p class="testimonial-text">"{{ $testimonial['text'] }}"</p>
                <p class="testimonial-author">— {{ $testimonial['author'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Professional Approach Section -->
<section class="approach-section">
    <div class="container">
        <h2 class="section-title">Professional Approach</h2>
        <div class="approach-grid">
            @foreach($approach as $item)
            <div class="approach-item">
                <p>{{ $item }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
