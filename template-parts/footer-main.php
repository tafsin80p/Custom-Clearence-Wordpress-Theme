<style>
.footer {
  border-top: 1px solid #fff;
  background-color: #17476a;
  color: #fff;
  padding: 40px 20px;
}

.footer-container {
  max-width: 1221px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: space-between;
}

.footer-left, .footer-middle, .footer-right {
  margin-bottom: 20px;
}

.footer-logo {
  display: flex;
  align-items: center;
}

.logo {
  height: 40px;
  margin-right: 10px;
}

.footer-description {
  font-size: 14px;
  color: #7a7a7a;
}

.footer-heading {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}

.footer-list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-list li {
  font-size: 14px;
  margin-bottom: 8px;
}

.footer-list a {
  color: #4b4b4b;
  text-decoration: none;
}

.footer-list a:hover {
  color: #007bff;
}

.footer-bottom {
  text-align: center;
  font-size: 12px;
  color: #7a7a7a;
  margin-top: 30px;
}

/* Media Queries for responsiveness */
@media screen and (min-width: 768px) {
  .footer-container {
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
  }

  .footer-left, .footer-middle, .footer-right {
    margin-bottom: 0;
  }

  .footer-left, .footer-middle, .footer-right {
    flex: 1;
  }

  .footer-middle, .footer-right {
    margin-left: 30px;
  }
}

</style>
<footer class="footer">
  <div class="footer-container">
    <!-- Left Section: Logo and Description -->
    <div class="footer-left">
      <div class="footer-logo">
        <img src="https://customsclearance.ma/wp-content/uploads/2025/09/Asset-2@4x-8.png" alt="CustomsClearance" class="logo">
        <p class="footer-description">Transitaire & courtier en douane – Maroc. PortNet/BADR, ATPA, DFD, COC, ONSSA/ANRT.</p>
      </div>
    </div>

    <!-- Middle Section: Locations -->
    <div class="footer-middle">
      <h4 class="footer-heading">Sièges</h4>
      <ul class="footer-list">
        <li>Casablanca – Bd Mohammed V</li>
        <li>Tanger – Tanger Med</li>
        <li>Agadir – Port d'Agadir</li>
        <li>Dakhla – Port de Dakhla</li>
      </ul>
    </div>

    <!-- Right Section: Useful Links & Contact -->
    <div class="footer-right">
      <h4 class="footer-heading">Liens utiles</h4>
      <ul class="footer-list">
        <li><a href="#">Services</a></li>
        <li><a href="#">Procédures</a></li>
        <li><a href="#">Ressources</a></li>
        <li><a href="#">Devis</a></li>
      </ul>

      <h4 class="footer-heading">Contact</h4>
      <ul class="footer-list">
        <li>+212 675 828 200</li>
        <li><a href="mailto:contact@customsclearance.ma">contact@customsclearance.ma</a></li>
        <li>FR • AR • EN</li>
      </ul>
    </div>
  </div>

  <!-- Bottom Section: Footer Text -->
  <div class="footer-bottom">
    <p>© 2025 CustomsClearance.ma — Tous droits réservés.</p>
  </div>
</footer>
