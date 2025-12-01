<div id="modalMembership" class="membership-overlay">
    
    <div class="contieneMembershipModal">
        
        <a href="javascript:void(0)" class="close-membership" onclick="closeMembership()">&times;</a>

        <div class="glass-panel">
            
            <h2>MEMBERSHIP</h2>
            
            <div class="membership-cards">
                <div class="mem-card plata">
                    <h3>PLATA</h3>
                    <p class="price">$ 1,500 USD</p>
                </div>
                <div class="mem-card oro">
                    <h3>ORO</h3>
                    <p class="price">$ 2,000 USD</p>
                </div>
                <div class="mem-card cristalino">
                    <h3>CRISTALINO</h3>
                    <p class="price">$ 2,500 USD</p>
                </div>
            </div>

            <p class="disclaimer">
                The membership contract is subject to a one-year term with monthly payments.
            </p>

        </div></div></div>

<script>
    function closeMembership() {
        document.getElementById('modalMembership').style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    function openMembership(e) {
        if(e) e.preventDefault();
        document.getElementById('modalMembership').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    window.onclick = function(event) {
        if (event.target == document.getElementById('modalMembership')) {
            closeMembership();
        }
    }
</script><div class="contieneMembership">
    <div class="cajaMembership">
        <h1>AGAVIA <br> Membership</h1>
        <div class="separador80"></div>
        <p>
            Gain access to exclusive experiences that go far beyond the bottle: from guided visits through planting, harvesting, and aging, to professional tastings and pairings led by sommeliers. Throughout the year, stay connected with live and on-demand sessions that deepen your appreciation and strengthen your connection to the craft and the community.
        </p>
        <br>
        <div class="boton dorado centrado">Explore Benefits</div>
    </div><!--cajaMembership-->
    <img id="fondoMembership" src="images/membershipBkg.webp" alt="">
</div><!--contieneMembership--->