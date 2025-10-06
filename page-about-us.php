<?php
/**
 * Template Name: About Us Page
 */

get_header(); ?>

<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center relative overflow-hidden"
    style="background-image: url('https://customsclearance.ma/wp-content/uploads/2015/11/header_bg_6.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">À propos de nous</h1>
            <div class="text-lg text-white mt-4">
                <a href="<?php echo home_url(); ?>" class="hover:underline">Accueil</a> &raquo; <span>À propos</span>
            </div>
        </div>
    </div>
</section>

<main class="py-20 px-4 bg-gray-50" id="main-content">
    <div class="container mx-auto max-w-[1221px] px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Section 1: Text Content -->
            <div class="text-gray-800" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-[#384050] mb-4">CustomsClearance.ma</h2>
                <p class="text-lg text-gray-600 mb-4">
                    CustomsClearance.ma accompagne les importateurs et exportateurs au Maroc : classement tarifaire HS,
                    PortNet/BADR, autorisations (ONSSA/ANRT/IMANOR), ATPA/AT, et optimisation fiscale. Notre engagement
                    : fiabilité, transparence et rapidité.
                </p>
                <p class="text-lg text-gray-600">
                    Nous sommes dédiés à simplifier vos opérations douanières et à garantir la conformité de vos
                    marchandises, vous permettant ainsi de vous concentrer sur le développement de votre activité.
                </p>
            </div>

            <!-- Section 2: Image (Placeholder) -->
            <div class="flex justify-center items-center" data-aos="fade-left" data-aos-duration="1000">
                <img src="https://hamzaelbouihi.svaomega.com/wp-content/uploads/2025/10/ChatGPT-Image-Oct-6-2025-02_23_15-PM.png"
                    alt="About Us Image" class="w-full max-w-lg rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Section 3: Our Mission (New Section) -->
        <div class="mt-20 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-[#384050] mb-4">Notre Mission</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Notre mission est de fournir des solutions de dédouanement innovantes et efficaces, adaptées aux besoins
                spécifiques de chaque client. Nous nous engageons à offrir un service exceptionnel, basé sur
                l'expertise, l'intégrité et une compréhension approfondie des réglementations douanières marocaines et
                internationales.
            </p>
        </div>

        <!-- Section 4: Nos Valeurs -->
        <div class="mt-20 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold text-[#384050] mb-4">Nos Valeurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Fiabilité</h3>
                    <p class="text-gray-600">Nous assurons des services douaniers précis et conformes, minimisant les
                        risques et les retards.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparence</h3>
                    <p class="text-gray-600">Une communication claire et des processus ouverts pour une confiance
                        mutuelle.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Rapidité</h3>
                    <p class="text-gray-600">Des procédures optimisées pour un dédouanement efficace et rapide de vos
                        marchandises.</p>
                </div>
            </div>
        </div>

       <!-- Section 5: FAQ Section -->
<div class="mt-20" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-3xl font-bold text-[#384050] mb-8 text-center">Questions Fréquentes</h2>

    <ul class="max-w-2xl mx-auto mt-5 divide-y bg-white shadow shadow-blue-100 rounded-xl p-4">
        <li>
            <details class="group">
                <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                    <svg class="w-5 h-5 text-gray-800 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <span class="text-gray-800 text-xl">Qu'est-ce qu'un membre Premium ?</span>
                </summary>

                <article class="px-12 pb-4 text-gray-800">
                    <p>
                        Un membre Premium bénéficie d'un accès exclusif à des services et fonctionnalités supplémentaires, y compris un support prioritaire, des réductions spéciales sur nos services, et l'accès à du contenu exclusif pour améliorer l'expérience d'importation et d'exportation.
                    </p>
                </article>
            </details>
        </li>

        <li>
            <details class="group">
                <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <span class="text-gray-800 text-xl">Quels sont les avantages d'un compte Premium ?</span>
                </summary>

                <article class="px-12 pb-4 text-gray-800">
                    <p>
                        En tant que membre Premium, vous bénéficiez de services personnalisés, de conseils d'experts en dédouanement, ainsi que d'un accès privilégié à des outils d'optimisation fiscale et réglementaire pour améliorer vos processus d'importation et d'exportation.
                    </p>
                </article>
            </details>
        </li>

        <li>
            <details class="group">
                <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <span class="text-gray-800 text-xl">Comment puis-je devenir membre Premium ?</span>
                </summary>

                <article class="px-12 pb-4 text-gray-800">
                    <p>
                        Vous pouvez devenir membre Premium en vous inscrivant directement sur notre site Web. Il vous suffit de vous connecter à votre compte et de choisir l'option de souscription Premium via notre page d'abonnement.
                    </p>
                </article>
            </details>
        </li>

        <li>
            <details class="group">
                <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                    <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <span class="text-gray-800 text-xl">Puis-je annuler mon abonnement Premium ?</span>
                </summary>

                <article class="px-12 pb-4 text-gray-800">
                    <p>
                        Oui, vous pouvez annuler votre abonnement à tout moment. Pour ce faire, accédez à la section "Mon Compte" et sélectionnez l'option d'annulation de l'abonnement Premium. Aucun frais ne sera appliqué pour les annulations avant la fin de la période de facturation.
                    </p>
                </article>
            </details>
        </li>
    </ul>
</div>


    </div>
</main>

<?php get_footer(); ?>