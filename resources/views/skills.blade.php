@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="card">
    <h2>Skills</h2>
    
    <div class="skills-grid">
        <div class="skill-item">
            <h3>Networking Basics</h3>
            <p>Fundamental understanding of network concepts, protocols, and configurations.</p>
        </div>
        
        <div class="skill-item">
            <h3>Office Productivity</h3>
            <p>Proficient in Microsoft Office suite and other productivity tools.</p>
        </div>
        
        <div class="skill-item">
            <h3>Basic Troubleshooting</h3>
            <p>Ability to diagnose and resolve common hardware and software issues.</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Skills page interactivity
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Skills page loaded');
        
        // Add animation to skill items
        const skillItems = document.querySelectorAll('.skill-item');
        skillItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.9)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'scale(1)';
            }, index * 150);
        });
        
        // Add hover effect
        skillItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
                this.style.boxShadow = '0 6px 20px rgba(102, 126, 234, 0.3)';
                this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = 'none';
            });
        });
    });
</script>
@endsection