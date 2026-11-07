@extends('layouts.app')

@section('title', 'Contact Details')

@section('content')
<div class="card">
    <h2>Contact Details</h2>
    
    <div class="contact-item">
        <strong>Email:</strong>
        <span>griecelanmillare97@gmail.com</span>
    </div>
    
    <div class="contact-item">
        <strong>Phone:</strong>
        <span>09551646910</span>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Contact page interactivity
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Contact page loaded');
        
        // Add hover effect to contact items
        const contactItems = document.querySelectorAll('.contact-item');
        contactItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });
</script>
@endsection