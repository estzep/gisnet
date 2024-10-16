<div class="custom-icons">
    <div class="bg-img">
        <img src="<? echo($path) ?>src/assets/img/hero/custom/bg.svg" alt="Background">
    </div>
    <div class="container">
        <div class="grid">
            <div class="icon blank"></div>
            <div class="icon square">
                <svg width="124" height="124" viewBox="0 0 124 124" xmlns="http://www.w3.org/2000/svg">
                    <!-- Outer Blue Square -->
                    <rect x="0" y="0" width="124" height="124" fill="#1F629E" />

                    <!-- Inner Gray Square -->
                    <rect id="inner-square" x="35" y="35" width="53" height="53" fill="#AFD0EE">
                        <!-- Animate the inner square expanding -->
                        <animate attributeName="x" from="35" to="0" dur="2s" begin="0s" fill="freeze" />
                        <animate attributeName="y" from="35" to="0" dur="2s" begin="0s" fill="freeze" />
                        <animate attributeName="width" from="53" to="124" dur="2s" begin="0s" fill="freeze" />
                        <animate attributeName="height" from="53" to="124" dur="2s" begin="0s" fill="freeze" />

                        <!-- Animate shrinking the gray square back to original size -->
                        <animate attributeName="x" from="0" to="35" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="y" from="0" to="35" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="width" from="124" to="53" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="height" from="124" to="53" dur="2s" begin="4s" fill="freeze" />
                    </rect>

                    <!-- Blue Square that appears from the middle -->
                    <rect id="blue-square" x="62" y="62" width="0" height="0" fill="#1F629E" visibility="hidden">
                        <!-- Make the blue square visible -->
                        <set attributeName="visibility" to="visible" begin="2s" />

                        <!-- Animate the new blue square expanding -->
                        <animate attributeName="x" from="62" to="0" dur="2s" begin="2s" fill="freeze" />
                        <animate attributeName="y" from="62" to="0" dur="2s" begin="2s" fill="freeze" />
                        <animate attributeName="width" from="0" to="124" dur="2s" begin="2s" fill="freeze" />
                        <animate attributeName="height" from="0" to="124" dur="2s" begin="2s" fill="freeze" />

                        <!-- Animate shrinking the blue square back to a point -->
                        <animate attributeName="x" from="0" to="62" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="y" from="0" to="62" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="width" from="124" to="0" dur="2s" begin="4s" fill="freeze" />
                        <animate attributeName="height" from="124" to="0" dur="2s" begin="4s" fill="freeze" />

                        <!-- Hide the blue square when it's back to the center -->
                        <set attributeName="visibility" to="hidden" begin="6s" />
                    </rect>

                    <!-- Loop the animation -->
                    <set xlink:href="#inner-square" attributeName="x" to="35" begin="6s" />
                    <set xlink:href="#inner-square" attributeName="y" to="35" begin="6s" />
                </svg>

                <!-- <img src="<? echo($path) ?>src/assets/img/hero/custom/square-2.svg" alt="Square"> -->
            </div>
            <div class="icon arrows">
                <svg width="154" height="123" viewBox="0 0 154 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Rightmost Arrow -->
                    <path d="M154 61.5831L102.788 0.600524L102.788 122.566L154 61.5831Z" 
                            fill="#01AB7F" transform="translate(-154, 0)">
                        <animateTransform attributeName="transform" type="translate"
                        from="-154 0" to="0 0" dur="0.5s" begin="0s" fill="freeze"
                        calcMode="spline" keySplines="0.42 0 0.58 1" />
                    </path>

                    <!-- Middle Arrow -->
                    <path d="M103.859 61.5831L52.6473 0.600524L52.6473 122.566L103.859 61.5831Z" 
                            fill="#01AB7F" transform="translate(-154, 0)">
                        <animateTransform attributeName="transform" type="translate"
                        from="-154 0" to="0 0" dur="0.5s" begin="0.5s" fill="freeze"
                        calcMode="spline" keySplines="0.42 0 0.58 1" />
                    </path>

                    <!-- Leftmost Arrow -->
                    <path d="M52 61.5831L0.787897 0.600524L0.787895 122.566L52 61.5831Z" 
                            fill="#CDF4ED" transform="translate(-154, 0)">
                        <animateTransform attributeName="transform" type="translate"
                        from="-154 0" to="0 0" dur="0.5s" begin="1s" fill="freeze"
                        calcMode="spline" keySplines="0.42 0 0.58 1" />
                    </path>
                </svg>
                <!-- <img src="<? echo($path) ?>src/assets/img/hero/custom/arrows.svg" alt="Arrows"> -->
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
