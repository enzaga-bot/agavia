<div
    id="modalMembership"
    class="membership-overlay"
    style="display:none;"
    role="dialog"
    aria-modal="true"
    aria-labelledby="membership-title"
    aria-describedby="membership-disclaimer"
>
    <div class="contieneMembershipModal" tabindex="-1">
        <a
            href="javascript:void(0)"
            class="close-membership"
            onclick="closeMembership()"
            aria-label="Close membership modal"
        >
            &times;
        </a>
        
        <div class="glass-panel">
            <h2 id="membership-title">MEMBERSHIP</h2>

            <div class="membership-cards">
                
                <div class="mem-card plata">
                    <h3>PLATA</h3>
                    <ul class="benefits-list">
                        <li>Bottles sent every 3 months.</li>
                        <li>Video collection and streaming.</li>
                    </ul>
                    <p class="price">$ 1,500 USD</p>
                    <br>
                    <a href="login.php" class="btn-buy dorado">Buy Membership</a>
                </div>

                <div class="mem-card oro">
                    <h3>ORO</h3>
                    <ul class="benefits-list">
                        <li>Bottles sent every 2 months.</li>
                        <li>Video collection and streaming</li>
                    </ul>
                    <p class="price">$ 2,000 USD</p>
                    <br>
                    <a href="login.php" class="btn-buy oscuro">Buy Membership</a>
                </div>

                <div class="mem-card cristalino">
                    <h3>CRISTALINO</h3>
                    <ul class="benefits-list">
                        <li>Bottles sent every month.</li>
                        <li>Video collection and streaming</li>
                        <li>Exclusive access to live tequila tasting.</li>
                        <li>Exclusive access to recorded tastings.</li>
                        <li>Exclusive access to all Agavia events.</li>
                    </ul>
                    <p class="price">$ 2,500 USD</p>
                    <br>
                    <a href="login.php" class="btn-buy dorado">Buy Membership</a>
                </div>

            </div>

            <p
                class="disclaimer"
                id="membership-disclaimer"
            >
                The membership contract is subject to a one-year term with monthly payments.
            </p>
        </div>
    </div>
</div>

<script>
    function openMembership(e) {
        if (e) e.preventDefault();
        const modal = document.getElementById('modalMembership');
        const container = modal.querySelector('.contieneMembershipModal');

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';

        // Enfocar el contenido del modal para lectores de pantalla/teclado
        container.focus();
    }

    function closeMembership() {
        const modal = document.getElementById('modalMembership');
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        var modal = document.getElementById('modalMembership');
        if (event.target === modal) {
            closeMembership();
        }
    };

</script>
