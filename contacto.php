<?php
$page_title = "Café Artesanal - Contacto";
$page_description = "Contacta con Café Artesanal - Estamos aquí para ayudarte";
include 'includes/header.php';
?>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Contacta con Nosotros</h1>
                <p>Estamos aquí para ayudarte. Envíanos un mensaje y te responderemos pronto.</p>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-info">
                        <h2>Información de Contacto</h2>
                        <div class="info-item">
                            <div class="info-icon">📍</div>
                            <div class="info-text">
                                <h3>Dirección</h3>
                                <p>Calle del Café, 123<br>28001 Madrid, España</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">📞</div>
                            <div class="info-text">
                                <h3>Teléfono</h3>
                                <p>+34 123 456 789</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">📧</div>
                            <div class="info-text">
                                <h3>Email</h3>
                                <p>info@cafeartesanal.com</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">🕒</div>
                            <div class="info-text">
                                <h3>Horario</h3>
                                <p>Lunes - Viernes: 9:00 - 20:00<br>Sábados: 10:00 - 18:00<br>Domingos: Cerrado</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-wrapper">
                        <h2>Envíanos un Mensaje</h2>
                        <form class="contact-form" action="#" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre *</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="asunto">Asunto *</label>
                                <select id="asunto" name="asunto" required>
                                    <option value="">Selecciona un asunto</option>
                                    <option value="consulta">Consulta General</option>
                                    <option value="pedido">Información sobre Pedidos</option>
                                    <option value="producto">Información sobre Productos</option>
                                    <option value="sugerencia">Sugerencia</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje *</label>
                                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn-primary">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section">
            <div class="container">
                <h2>¿Dónde Estamos?</h2>
                <div class="map-placeholder">
                    <p>📍 Mapa de ubicación</p>
                    <p class="map-note">Calle del Café, 123 - 28001 Madrid, España</p>
                </div>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>

