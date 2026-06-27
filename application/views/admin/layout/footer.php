        </div> <!-- End Page Content -->
        
        <footer class="admin-footer">
            <p>&copy; <?= date('Y') ?> Pantai Pecaron. All rights reserved.</p>
        </footer>
    </main> <!-- End Main Content -->

    <!-- Sidebar Script for Mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                sidebarOverlay.classList.toggle('active');
            }

            if (menuToggle && sidebar && sidebarOverlay) {
                menuToggle.addEventListener('click', toggleSidebar);
                sidebarOverlay.addEventListener('click', toggleSidebar);
            }
        });
    </script>
</body>
</html>
