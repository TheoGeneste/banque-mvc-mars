<!-- Crée le tableau pour afficher les transacions -->
 <h2>Transactions</h2>
 <button onclick="redirectToTransaction()">Ajouter une transaction</button>
 <table>
    <thead>
        <th>ID</th>
        <th>Compte debiteur</th>
        <th>Compte beneficiaire</th>
        <th>Montant</th>
        <th>Date</th>
    </thead>
    <tbody>
        <?php 
            foreach ($transactions as $transaction) {
                echo "<tr>";
                    echo"<td>". $transaction["ID"] ."</td>";
                    echo "<td>". $transaction["CompteDebiteur"] ."</td>";
                    echo "<td>". $transaction["CompteBeneficiaire"] ."</td>";
                    echo "<td>". $transaction["Montant"] ."</td>";
                    echo "<td>". $transaction["Date"] ."</td>";
                echo '</tr>';
            }
        ?>
    </tbody>
 </table>

 <script type="text/javascript">
    function redirectToTransaction() {
        window.location.replace('../../Controllers/TransactionController.php?action=create');
    }
 </script>