@extends('frontend.layout.main')

@section('main-container')

<div class="artist-cover">
    <div class="artist-cover__content">
        <h1 class="artist-cover__title">Catalogue</h1>
        <p class="artist-cover__subtitle">Explore the catalogues showcasing the works of Savi Sawarkar.</p>
    </div>
</div>

<div class="catalog-section">
    <div class="catalog-grid">

        <!-- Catalog Card 1 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/untouchable.jpg') }}" alt="Catalog 1" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">An Untouchable Reaches Out 2010 Amherst</h2>
                <p class="catalog-desc">The Dalit Art
                    Of Savi Savarkar.</p>
                <a href="{{ asset('assets/pdf/AnUntouchableReachesOut2010AmherstPDF.pdf') }}" class="download-btn" id="downloadpdf1" download>Download PDF</a>
            </div>
        </div>

        <!-- Catalog Card 2 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/eyecast.jpg') }}" alt="Catalog 2" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">Eyes Re-Cast</h2>
                <p class="catalog-desc">When there is no longer a “human minimum”, there is no culture.</p>
                <a href="{{ asset('assets/pdf/Eyes_Re_Cast_Recent_Works_of_Savi_Sawark.pdf') }}" class="download-btn" id="downloadpdf2" download>Download PDF</a>
            </div>
        </div>

        <!-- Catalog Card 3 -->
        <div class="catalog-card">
            <img src="{{ asset('assets/img/021a.jpg') }}" alt="Catalog 3" class="catalog-thumbnail">
            <div class="catalog-content">
                <h2 class="catalog-title">Eyes of Dignity and Canvas By Santosh Raut</h2>
                <p class="catalog-desc">Eyes of Dignity and Canvas of Transcendence:Savi Sawarkar’s Aesthetic of Liberation </p>
                <a href="{{ asset('assets/pdf/SaviArticleforWeb_Santosh.pdf') }}" class="download-btn" id="downloadpdf3" download>Download PDF</a>
            </div>
        </div>

        <!-- Add more catalog cards as needed -->

    </div>
</div>
<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    .popup-box {
        background: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        width: 400px;
        text-align: center;
    }

    .popup-box h3 {
        font-size: 24px;
        margin-bottom: 15px;
        font-family: 'Anton', sans-serif;
        color: #004179;
    }

    .popup-box input {
        width: 100%;
        margin: 8px 0;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #ccc;
        color: #004179;
        border-radius: 6px;
    }

    .popup-box button {
        margin-top: 10px;
        padding: 10px 15px;
        border: none;
        border-radius: 6px;
        background-color: #004179;
        color: white;
        cursor: pointer;
    }

    .close-btn {
        background-color: #999;
        margin-left: 5px;
    }

</style>

<!-- Popup Form -->
<div id="downloadFormModal" class="popup-overlay" style="display:none;">
    <div class="popup-box">
        <h3>Enter Details to Download PDF</h3>
        <form id="downloadForm">
            <input type="text" id="userName" name="name" placeholder="Enter your name" required>
            <input type="email" id="userEmail" name="email" placeholder="Enter your email" required>
            <input type="hidden" id="pdfLink" name="pdfLink">
            <button type="submit" class="submit-btn">Download PDF</button>
            <button type="button" class="close-btn" onclick="closePopup()">Cancel</button>
        </form>
    </div>
</div>
<script>
    const clientNumber = "9823432448"; // 👈 Client ka WhatsApp number (country code ke sath, e.g. 91 for India)
    let selectedPdf = "";

    document.querySelectorAll('.download-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            selectedPdf = this.getAttribute('href');
            document.getElementById('pdfLink').value = selectedPdf;
            document.getElementById('downloadFormModal').style.display = 'flex';
        });
    });

    function closePopup() {
        document.getElementById('downloadFormModal').style.display = 'none';
    }

    document.getElementById('downloadForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('userName').value.trim();
        const email = document.getElementById('userEmail').value.trim();
        const pdfLink = document.getElementById('pdfLink').value;

        if (!name || !email) {
            alert("Please fill all fields!");
            return;
        }

        // 🟢 Step 1: PDF Download
        const link = document.createElement('a');
        link.href = pdfLink;
        link.download = pdfLink.split('/').pop();
        link.click();

        // 🟢 Step 2: WhatsApp Message (opens automatically)
        const subjectName = pdfLink.split('/').pop().replace('.pdf', '');
        const message = `New Catalogue Download:%0A%0A👤 Name: ${name}%0A📧 Email: ${email}%0A📘 PDF: ${subjectName}`;
        const whatsappURL = `https://wa.me/${clientNumber}?text=${message}`;

        // Open WhatsApp automatically
        window.open(whatsappURL, "_blank");

        // Close popup
        closePopup();
    });

</script>



@endsection
