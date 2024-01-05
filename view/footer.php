    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">¿Dónde estamos?</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Lateral Sur Acceso Este 5211, Villa Nueva, Guaymallén, CP 5521</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+54 9 261 565 6984</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>contacto@polopositivoar.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank" href="https://api.whatsapp.com/send/?phone=2615656984&text&type=phone_number&app_absent=0"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"  href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"  href="https://instagram.com/polopositivoar?igshid=ZDdkNTZiNTM="><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"  href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Servicios</h4>
                    <a class="btn btn-link">Diseño de Aplicaciones</a>
                    <a class="btn btn-link">Diseño Web</a>
                    <a class="btn btn-link" >Integraciones</a>
                    <a class="btn btn-link" >Marketing Digital</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Links</h4>
                    <a class="btn btn-link" href="about">Sobre Nosotros</a>
                    <a class="btn btn-link" href="contact">Contacto</a>
                    <a class="btn btn-link" href="service">Servicios</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="img-fluid" src="assets/img/argentina.jpg" width="150rem">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Polo Positivo</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <script>
                    document.write(new Date().getFullYear());
                    </script> Todos los derechos reservados.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script type="text/javascript">
    // ——————————————————————————————————————————————————
    // TextScramble
    // ——————————————————————————————————————————————————

    class TextScramble {
        constructor(el) {
            this.el = el;
            this.chars = "!<>-_\\/[]{}—=+*^?#________";
            this.update = this.update.bind(this);
        }
        setText(newText) {
            const oldText = this.el.innerText;
            const length = Math.max(oldText.length, newText.length);
            const promise = new Promise((resolve) => (this.resolve = resolve));
            this.queue = [];
            for (let i = 0; i < length; i++) {
                const from = oldText[i] || "";
                const to = newText[i] || "";
                const start = Math.floor(Math.random() * 40);
                const end = start + Math.floor(Math.random() * 40);
                this.queue.push({
                    from,
                    to,
                    start,
                    end
                });
            }
            cancelAnimationFrame(this.frameRequest);
            this.frame = 0;
            this.update();
            return promise;
        }
        update() {
            let output = "";
            let complete = 0;
            for (let i = 0, n = this.queue.length; i < n; i++) {
                let {
                    from,
                    to,
                    start,
                    end,
                    char
                } = this.queue[i];
                if (this.frame >= end) {
                    complete++;
                    output += to;
                } else if (this.frame >= start) {
                    if (!char || Math.random() < 0.28) {
                        char = this.randomChar();
                        this.queue[i].char = char;
                    }
                    output += `<span class="dud">${char}</span>`;
                } else {
                    output += from;
                }
            }
            this.el.innerHTML = output;
            if (complete === this.queue.length) {
                this.resolve();
            } else {
                this.frameRequest = requestAnimationFrame(this.update);
                this.frame++;
            }
        }
        randomChar() {
            return this.chars[Math.floor(Math.random() * this.chars.length)];
        }
    }

    // ——————————————————————————————————————————————————
    // Example
    // ——————————————————————————————————————————————————

    const phrases = ["Polo", "Positivo", "Polo", "+", "Polo", "Positivo", "+"];

    const el = document.querySelector(".text");
    const fx = new TextScramble(el);

    let counter = 0;
    const next = () => {
        fx.setText(phrases[counter]).then(() => {
            setTimeout(next, 800);
        });
        counter = (counter + 1) % phrases.length;
    };

    next();
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- sweetalert -->

</body>

</html>