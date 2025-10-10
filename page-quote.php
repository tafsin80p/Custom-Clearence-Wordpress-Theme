<?php
/**
 * Template Name: Quote Page
 */

get_header(); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-[#0F2033] to-[#1A2B3C] text-white py-20 px-4 text-center relative overflow-hidden"
    style="background-image: url('https://customsclearance.ma/wp-content/uploads/revslider/slider_2.jpg');  background-position: center; background-repeat: no-repeat; background-size: cover; height: 300px;">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto max-w-[1221px] px-4 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">Obtenir un Devis Gratuit</h1>
            <div class="text-lg text-white mt-4">
                <a href="<?php echo home_url(); ?>" class="hover:underline">Accueil</a> &raquo; <span>Quote</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="py-20 px-4 bg-[#f8fafc]" id="main-content">
    <div class=" mx-auto flex gap-16 container max-w-[1221px]">
        <!-- Form Section -->
        <div class="flex-2 bg-white p-8 rounded-xl shadow-lg">
            <h1 class="text-3xl font-extrabold mb-4 text-[#1E293B]">Obtenir un devis</h1>
            <p class="text-lg text-[#64748B] mb-8">Devis détaillé en 24h. Vous pouvez joindre une facture/proforma et votre liste de colisage.</p>
            
  <?php echo do_shortcode( '[contact-form-7 id="6c62fd3" title="quote page"]');?>

            <!-- <form id="quoteForm" class="space-y-6 text-[#17476a]">
                <div class="flex gap-6">
                    <div class="flex-1">
                        <input type="text" name="name" placeholder="Nom / Société" class="w-full px-4 py-3 border-2 border-[#E5E7EB] rounded-lg text-md focus:outline-none focus:ring-2 focus:ring-[#17476a]" required>
                    </div>
                    <div class="flex-1">
                        <input type="email" name="email" placeholder="Email" class="w-full px-4 py-3 border-2 border-[#E5E7EB] rounded-lg text-md focus:outline-none focus:ring-2 focus:ring-[#17476a]" required>
                    </div>
                </div>

                <div class="w-full">
                    <input type="tel" name="phone" placeholder="Téléphone" class="w-full px-4 py-3 border-2 border-[#E5E7EB] rounded-lg text-md focus:outline-none focus:ring-2 focus:ring-[#17476a]" required>
                </div>

                <div class="w-full">
                    <textarea name="description" placeholder="Type de marchandise / HS si connu" class="w-full p-4 border-2 border-[#E5E7EB] rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-[#17476a]" required></textarea>
                </div>

                <div class="my-6">
                    <div class="flex items-center gap-2 text-[#1E293B] mb-4">
                        <svg class="w-4 h-4 text-[#64748B]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                        Joindre un fichier (PDF/JPG/PNG ≤ 10 Mo)
                    </div>
                    <input type="file" name="attachment" accept=".pdf,.jpg,.jpeg,.png" class="w-full p-4 border-2 border-[#E5E7EB] rounded-lg text-lg cursor-pointer">
                </div>

                <button type="submit" class="w-full bg-[#1E293B] text-white px-6 py-4 rounded-lg text-lg font-semibold hover:bg-[#0F172A] transform transition-all duration-300">Envoyer la demande</button>
            </form> -->

        </div>

        <!-- Contact Section -->
        <div class="flex-1 flex flex-col  justify-center bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-extrabold text-[#1E293B] mb-4">Contact rapide</h2>
            <p class="text-sm text-[#64748B] mb-6">Vous préférez échanger directement ?</p>

            <button class="w-full bg-white border-2 border-[#E5E7EB] text-[#1E293B] px-6 py-4 rounded-lg text-lg font-semibold hover:bg-[#F8FAFC] flex items-center justify-center gap-3 mb-6" onclick="openWhatsApp('212675828200', 'Bonjour, j\'aimerais obtenir des informations sur vos services de dédouanement.')">
                <div class="bg-[#17476a] text-white w-6 h-6 rounded-full flex items-center justify-center text-sm"><i class="fa-brands fa-whatsapp"></i></div> WhatsApp Pro
            </button>

            <div class="space-y-4">
                <a href="tel:+212675828200" class="block text-lg text-[#1E293B] hover:text-[#3B82F6]">+212 675 828 200</a>
                <a href="mailto:contact@customsclearance.ma" class="block text-lg text-[#1E293B] hover:text-[#3B82F6]">contact@customsclearance.ma</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>