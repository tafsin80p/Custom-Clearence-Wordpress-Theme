function openWhatsApp() {
    const phoneNumber = '212675828200';
    const message = encodeURIComponent('Bonjour, j\'aimerais obtenir des informations sur vos services de dédouanement.');
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(whatsappUrl, '_blank');
}
<<<<<<< HEAD


=======
>>>>>>> 70c067eb63a353fad1adffc11e7f0396deef942a
