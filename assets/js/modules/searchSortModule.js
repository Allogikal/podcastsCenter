import { openModal, closeModal } from './modalWindows.js';

$(document).ready(function () {
    search();

    $('#searchInput').on('input', function () {
        search();
    });

    $('#categorySelect').on('change', function () {
        search();
    });
});

function search() {
    let searchQuery = document.getElementById('searchInput').value;
    let selectedCategory = document.getElementById('categorySelect').value;

    $.ajax({
        type: 'GET',
        url: '/app/controllers/searchSortController.php',
        data: { query: searchQuery, category: selectedCategory },
        dataType: 'json',
        success: (data) => { displayPodcasts(data); },
        error: (error) => { console.error('FAILED:', error); }
    });
}

function formatDate(inputTimestamp) {
    const inputDate = new Date(inputTimestamp * 1000);
    const options = { month: 'long', day: 'numeric', year: 'numeric' };
    const formattedDate = inputDate.toLocaleDateString('ru-RU', options);
    return formattedDate;
}

function displayPodcasts(results) {
    var resultsContainer = document.getElementById('searchResults');
    resultsContainer.innerHTML = '';

    if (results.length === 0) {
        resultsContainer.innerHTML = '<h1 style="padding-top: 3rem; font-size: 1.5rem; font-weight: 300;">Нет результатов.</h1>';
        return;
    }

    for (let i = 0; i < results.length; i++) {
        if (i % 2 == 0) {
            resultsContainer.innerHTML += `<div class="podcasts_body__item">
                    <div>
                        <h2>` + results[i].title + `</h2>
                        <p data-modalId="modalInfo` + results[i].id + `" class="openModalInfo">@` + results[i].name + ` ` + results[i].surname + `</p>
                        <p>` + results[i].description + `</p>
                        <p>` + formatDate(results[i].created_at) + `</p>
                    </div>
                    <div class="screen_podcasts__item_target">
                        <img class="imageClip" src="` + results[i].image_file + `" alt="imagePodcast">
                        <div>
                            <!-- BUTTON FOR PLAY OR PAUSE OF CLICK() -->
                            <svg class="screen_podcasts__item_play" width="46" height="52" viewBox="0 0 46 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="playPodcast" filter="url(#filter0_d_5_259)">
                                    <path d="M42 22L4.5 43.6506L4.5 0.349365L42 22Z" fill="#9D8568" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5_259" x="0.5" y="0.349365" width="45.5" height="51.3013" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_259" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_259" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            <svg style="display:none;" class="screen_podcasts__item_pause" width="41" height="30" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" repeatCount="indefinite" />
                                </rect>
                                <rect x="9" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.1s" repeatCount="indefinite" />
                                </rect>
                                <rect x="18" y="0" width="5" height="30" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="20; 40; 20" dur="1s" keyTimes="0;0.5;1" begin="0.2s" repeatCount="indefinite" />
                                </rect>
                                <rect x="27" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.3s" repeatCount="indefinite" />
                                </rect>
                                <rect x="36" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" begin="0.4s" repeatCount="indefinite" />
                                </rect>
                            </svg>
                        </div>
                    </div>
                    </div>`;
        } else {
            resultsContainer.innerHTML += `<div class="podcasts_body__item reverse">
                    <div>
                        <h2>` + results[i].title + `</h2>
                        <p data-modalId="modalInfo` + results[i].id + `" class="openModalInfo">@` + results[i].name + ` ` + results[i].surname + `</p>
                        <p>` + results[i].description + `</p>
                        <p>` + formatDate(results[i].created_at) + `</p>
                    </div>
                    <div class="screen_podcasts__item_target">
                        <img class="imageClip" src="` + results[i].image_file + `" alt="imagePodcast">
                        <div>
                            <!-- BUTTON FOR PLAY OR PAUSE OF CLICK() -->
                            <svg class="screen_podcasts__item_play" width="46" height="52" viewBox="0 0 46 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="playPodcast" filter="url(#filter0_d_5_259)">
                                    <path d="M42 22L4.5 43.6506L4.5 0.349365L42 22Z" fill="#9D8568" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5_259" x="0.5" y="0.349365" width="45.5" height="51.3013" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_259" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_259" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            <svg style="display:none;" class="screen_podcasts__item_pause" width="41" height="30" viewBox="0 0 41 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" repeatCount="indefinite" />
                                </rect>
                                <rect x="9" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.1s" repeatCount="indefinite" />
                                </rect>
                                <rect x="18" y="0" width="5" height="30" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="20; 40; 20" dur="1s" keyTimes="0;0.5;1" begin="0.2s" repeatCount="indefinite" />
                                </rect>
                                <rect x="27" y="5" width="5" height="20" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="10; 30; 10" dur="1s" keyTimes="0;0.5;1" begin="0.3s" repeatCount="indefinite" />
                                </rect>
                                <rect x="36" y="10" width="5" height="10" rx="2.5" fill="#9D8568">
                                    <animate attributeName="height" values="5; 20; 5" dur="1s" keyTimes="0;0.5;1" begin="0.4s" repeatCount="indefinite" />
                                </rect>
                            </svg>
                        </div>
                    </div>
                    </div>`;
        }
    }

    // --------------------
    // AUDIO PLAYER OPTIONS
    // --------------------

    let audioPlayers = results.map((result) => {
        return new Audio(result.audio_file);
    });

    document.querySelectorAll('.screen_podcasts__item_play').forEach((playBtn, index) => {
        playBtn.addEventListener('click', () => {
            let audio = audioPlayers[index];
            if (audio.paused) {
                audio.play();
                playBtn.style.display = 'none';
                document.querySelectorAll('.screen_podcasts__item_pause')[index].style.display = 'inline-block';
            } else {
                audio.pause();
                playBtn.style.display = 'inline-block';
                document.querySelectorAll('.screen_podcasts__item_pause')[index].style.display = 'none';
            }
        });
    });

    document.querySelectorAll('.screen_podcasts__item_pause').forEach((pauseBtn, index) => {
        pauseBtn.addEventListener('click', () => {
            let audio = audioPlayers[index];
            if (!audio.paused) {
                audio.pause();
                pauseBtn.style.display = 'none';
                document.querySelectorAll('.screen_podcasts__item_play')[index].style.display = 'inline-block';
            }
        });
    });

    // Обработчик события для открытия модального окна

    const openModalButtons = document.querySelectorAll('.openModalInfo');
    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modalId');
            openModal(modalId);
        });
    });

    // Обработчик события для закрытия модального окна

    const closeModalButtons = document.querySelectorAll('.closeModalInfo');
    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modalId');
            closeModal(modalId);
        });
    });

}