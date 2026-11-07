@extends('layouts.app')

@section('title', 'Education')

@section('content')
<div class="card">
    <h2>Education</h2>
    
    <div class="education-item">
        <h3>Primary Education</h3>
        <p><strong>School:</strong> Patucannay Elementary School</p>
        <p><strong>Address:</strong> Patucannay, Bangued, Abra</p>
        <p class="year"><strong>Year Graduated:</strong> 2015</p>
    </div>
    
    <div class="education-item">
        <h3>Secondary Education</h3>
        <p><strong>School:</strong> Abra High School</p>
        <p><strong>Address:</strong> Zone 3, Bangued, Abra</p>
        <p><strong>Strand:</strong> GAS (General Academic Strand)</p>
        <p class="year"><strong>Year Graduated:</strong> 2022</p>
    </div>
    
    <div class="education-item">
        <h3>Tertiary Education</h3>
        <p><strong>School:</strong> Data Center College of Bangued</p>
        <p><strong>Address:</strong> Ubbog, Lipcan, Bangued, Abra</p>
        <p><strong>Course:</strong> BSIT (Bachelor of Science in Information Technology)</p>
        <p class="year"><strong>Expected Year Graduated:</strong> 2027</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Education page interactivity
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Education page loaded');
        
        // Add animation to education items
        const educationItems = document.querySelectorAll('.education-item');
        educationItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 200);
        });
        
        // Add hover effect
        educationItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 4px 15px rgba(102, 126, 234, 0.2)';
                this.style.transition = 'box-shadow 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });
    });
</script>
@endsection