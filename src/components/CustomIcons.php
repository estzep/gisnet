<div class="custom-icons">
    <div class="bg-img">
        <img src="<? echo($path) ?>src/assets/img/hero/custom/bg.svg" alt="Background">
    </div>
    <div class="container">
        <div class="grid">
            <div class="icon blank"></div>
            <div class="icon square">
                <svg width="300" height="300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                    <!-- Outer Blue Square -->
                    <rect x="0" y="0" width="300" height="300" fill="blue" />
                    
                    <!-- Inner Gray Square -->
                    <rect id="inner-square" x="100" y="100" width="100" height="100" fill="gray">
                        <!-- Animate the inner square expanding -->
                        <animate 
                            attributeName="x" from="100" to="0" dur="2s" begin="0s" fill="freeze" />
                        <animate 
                            attributeName="y" from="100" to="0" dur="2s" begin="0s" fill="freeze" />
                        <animate 
                            attributeName="width" from="100" to="300" dur="2s" begin="0s" fill="freeze" />
                        <animate 
                            attributeName="height" from="100" to="300" dur="2s" begin="0s" fill="freeze" />

                        <!-- Animate shrinking the gray square back to original size -->
                        <set attributeName="x" to="100" begin="4s" fill="freeze" />
                        <set attributeName="y" to="100" begin="4s" fill="freeze" />
                        <set attributeName="width" to="100" begin="4s" fill="freeze" />
                        <set attributeName="height" to="100" begin="4s" fill="freeze" />
                    </rect>

                    <!-- Blue Square that appears from the middle -->
                    <rect id="blue-square" x="150" y="150" width="0" height="0" fill="blue" visibility="hidden">
                        <!-- Animate the new blue square expanding -->
                        <set attributeName="visibility" to="visible" begin="2s" />
                        <animate 
                        attributeName="x" from="150" to="0" dur="2s" begin="2s" fill="freeze" />
                        <animate 
                        attributeName="y" from="150" to="0" dur="2s" begin="2s" fill="freeze" />
                        <animate 
                        attributeName="width" from="0" to="300" dur="2s" begin="2s" fill="freeze" />
                        <animate 
                        attributeName="height" from="0" to="300" dur="2s" begin="2s" fill="freeze" />

                        <!-- Animate shrinking the blue square back to a point -->
                        <animate 
                        attributeName="x" from="0" to="150" dur="2s" begin="4s" fill="freeze" />
                        <animate 
                        attributeName="y" from="0" to="150" dur="2s" begin="4s" fill="freeze" />
                        <animate 
                        attributeName="width" from="300" to="0" dur="2s" begin="4s" fill="freeze" />
                        <animate 
                        attributeName="height" from="300" to="0" dur="2s" begin="4s" fill="freeze" />

                        <!-- Hide the blue square when it's back to the center -->
                        <set attributeName="visibility" to="hidden" begin="6s" />
                    </rect>

                    <!-- Loop the animation -->
                    <set xlink:href="#inner-square" attributeName="x" to="100" begin="6s" />
                    <set xlink:href="#inner-square" attributeName="y" to="100" begin="6s" />
                </svg>
                <!-- <img src="<? echo($path) ?>src/assets/img/hero/custom/square-2.svg" alt="Square"> -->
            </div>
            <div class="icon arrows">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/arrows.svg" alt="Arrows">
            </div>
            <div class="icon blank"></div>
            <div class="icon square">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/square-1.svg" alt="Square">
            </div>
            <div class="icon database">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/database.svg" alt="Database">
            </div>
            <div class="icon gear">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/gear.svg" alt="Gear">
            </div>
            <div class="icon interface">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/interface.svg" alt="Interface">
            </div>
            <div class="icon blank"></div>
            <div class="icon circle">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/circle.svg" alt="Circle">
            </div>
            <div class="icon user">
                <img src="<? echo($path) ?>src/assets/img/hero/custom/user.svg" alt="User">
            </div>
            <div class="icon blank"></div>
        </div>
    </div>
</div>
