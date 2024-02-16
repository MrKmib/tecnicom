

<!--variables de variables
<?= $$paginate?>
-->




<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="<?= $$paginate['prev_page_url'] ?>">Previous</a></li>
    <?php for ($i=1; $i <= $$paginate['last_page']; $i++): ?>
        <!-- <li class="page-item">
            <a class="page-link" 
            href="/contacts?page=<?= $i?><?= isset($_GET['search']) ? "&search={$_GET['search']}" : '' ?>">
                <?= $i ?>
            </a>
        </li> -->
    <?php endfor ?>

    <li class="page-item"><a class="page-link" href="<?= $$paginate['next_page_url'] ?>">Next</a></li>
  </ul>
</nav>
