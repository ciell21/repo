@extends('layouts.app')

@section('title', 'Certificates')

@section('content')
<div class="card">
    <h2>Certificates</h2>
    
    <div class="certificate-item">
        <h3>Certificate of Online Safety Through Netiquette</h3>
        <p>A certification demonstrating knowledge and understanding of proper online behavior, digital etiquette, and internet safety practices.</p>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Certificates page interactivity
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Certificates page loaded');
        
        // Add animation to certificate items
        const certificateItems = document.querySelectorAll('.certificate-item');
        certificateItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(-20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }, index * 200);
        });
        
        // Add hover effect
        certificateItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(10px)';
                this.style.boxShadow = '0 6px 20px rgba(118, 75, 162, 0.3)';
                this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
                this.style.boxShadow = 'none';
            });
        });
    });
</script>
@endsection