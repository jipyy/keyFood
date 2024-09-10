<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
 {{-- dekstop --}}
    <section class="sm:hidden bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <div class="video-container mb-4">
            <video id="desktopVideoPlayer" controls class="w-full h-96 rounded-lg">
                <source src="path/to/your/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="description-container mb-4 text-center">
            <p id="desktopVideoDescription" class="text-lg text-gray-700">Deskripsi video 1 di sini.</p>
        </div>
        <div class="controls text-center">
            <button id="prevBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 disabled:opacity-50 hover:bg-blue-700">Back</button>
            <button id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-700">Next</button>
            <button id="finishBtn" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700" style="display: none;">Finish</button>
        </div>
    </section>
 {{-- mobile --}}
    <section class="lg:hidden md:hidden bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <div class="video-container mb-4">
            <video id="mobileVideoPlayer" controls class="w-full h-96 rounded-lg">
                <source src="path/to/your/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="description-container mb-4 text-center">
            <p id="mobileVideoDescription" class="text-lg text-gray-700">Deskripsi video 1 di sini.</p>
        </div>
        <div class="controls text-center">
            <button id="prevBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 disabled:opacity-50 hover:bg-blue-700">Back</button>
            <button id="nextBtn" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2 hover:bg-blue-700">Next</button>
            <button id="finishBtn" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700" style="display: none;">Finish</button>
        </div>
    </section>

    <script>
        const desktopVideos = [
            { src: "vidio/Screen Recording 2024-09-05 110938.mp4", description: "dekstop" },
            { src: "path/to/your/desktop_video2.mp4", description: "Deskripsi video desktop 2 di sini." },
        ];

        const mobileVideos = [
            { src: "vidio/Screen Recording 2024-09-05 111102.mp4", description: "mobile." },
            { src: "path/to/your/mobile_video2.mp4", description: "Deskripsi video mobile 2 di sini." },
        ];

        const videos = window.innerWidth >= 640 ? desktopVideos : mobileVideos; // Determine which videos to use

        let currentVideoIndex = 0;

        const videoPlayer = document.getElementById(window.innerWidth >= 640 ? 'desktopVideoPlayer' : 'mobileVideoPlayer'); // Menggunakan ID yang sesuai
        const videoDescription = document.getElementById(window.innerWidth >= 640 ? 'desktopVideoDescription' : 'mobileVideoDescription'); // Menggunakan ID yang sesuai
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const finishBtn = document.getElementById('finishBtn');

        function loadVideo(index) {
            videoPlayer.src = videos[index].src;
            videoDescription.textContent = videos[index].description;
            videoPlayer.load();
            updateButtons();
        }

        function updateButtons() {
            prevBtn.disabled = currentVideoIndex === 0;
            if (currentVideoIndex === videos.length - 1) {
                nextBtn.style.display = 'none';
                finishBtn.style.display = 'inline-block';
            } else {
                nextBtn.style.display = 'inline-block';
                finishBtn.style.display = 'none';
            }
        }

        prevBtn.addEventListener('click', () => {
            if (currentVideoIndex > 0) {
                currentVideoIndex--;
                loadVideo(currentVideoIndex);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentVideoIndex < videos.length - 1) {
                currentVideoIndex++;
                loadVideo(currentVideoIndex);
            }
        });

        finishBtn.addEventListener('click', () => {
            alert('You have finished watching all the videos!');
        });

        loadVideo(currentVideoIndex);
    </script>

</body>
</html>

