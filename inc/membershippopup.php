<div id="modalMembership" class="membership-overlay" style="display:none;">
    <div class="contieneMembershipModal">
        <a href="javascript:void(0)" class="close-membership" onclick="closeMembership()">&times;</a>
        
        <div class="glass-panel">
            <h2>MEMBERSHIP</h2>
            <div class="membership-cards">
                <div class="mem-card plata"><h3>PLATA</h3><p class="price">$1,500</p></div>
                 <div class="mem-card oro"><h3>ORO</h3><p class="price">$2,000</p></div>
                 <div class="mem-card cristalino"><h3>CRISTALINO</h3><p class="price">$2,500</p></div>
            </div>
            <p class="disclaimer">The membership contract is subject to a one-year term.</p>
        </div>
    </div>
</div>

<script>
    function openMembership(e) {
        if(e) e.preventDefault();
        document.getElementById('modalMembership').style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Bloquea el scroll
    }

    function closeMembership() {
        document.getElementById('modalMembership').style.display = 'none';
        document.body.style.overflow = 'auto'; // Reactiva el scroll
    }

    // Cerrar al dar clic fuera
    window.onclick = function(event) {
        var modal = document.getElementById('modalMembership');
        if (event.target == modal) {
            closeMembership();
        }
    }
</script>