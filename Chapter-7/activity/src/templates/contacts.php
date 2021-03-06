<?php

/** @var \PDOStatement $contacts */
/** @var array $formError */
/** @var array $formData */
?>
<section class="my-5">
    <h3>Contacts</h3>
</section>
<div class="row">
    <div class="col-12 col-lg-8">
        <h4 class="mb-3">Contacts list:</h4>
        <?php if ($contacts->rowCount()) { ?>
            <table class="table">
                <tbody>
                    <?php while ($contact = $contacts->fetch()) { ?>
                        <tr>
                            <th><?= $contact['name'] ?></th>
                            <th><?= $contact['email'] ?></th>
                            <th><?= $contact['phone'] ?></th>
                            <th><?= $contact['address'] ?></th>
                            <td>
                                <a href="/contacts?edit=<?= $contact['id'] ?>">Edit</a>
                                <a href="/contacts?delete=<?= $contact['id'] ?>" 
                                   onclick="return confirm('Are you sure you want to delete the entry?')"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No contacts.</p>
        <?php } ?>
    </div>
    <div class="col-12 col-lg-4">
        <h4 class="mb-3">Add Contact:</h4>
        <form method="post">
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="contactName">Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="contactName" 
                        placeholder="Enter name"
                        class="form-control <?= isset($formError['name']) ? 'is-invalid' : ''; ?>"
                        value="<?= htmlentities($formData['name'] ?? '')?>"
                    >
                    <?php if (isset($formError['name'])) {
                        echo sprintf('<div class="invalid-feedback show">%s</div>', htmlentities($formError['name']));
                    } ?>
                </div>
                <div class="form-group col-6">
                    <label for="contactPhone">Phone</label>
                    <input 
                        type="text" 
                        name="phone" 
                        id="contactPhone" 
                        placeholder="Enter Phone"
                        class="form-control <?= isset($formError['phone']) ? 'is-invalid' : ''; ?>"
                        value="<?= htmlentities($formData['phone'] ?? '')?>"
                    >
                    <?php if (isset($formError['phone'])) {
                        echo sprintf('<div class="invalid-feedback show">%s</div>', htmlentities($formError['phone']));
                    } ?>
                </div>
                <div class="form-group col-12">
                    <label for="contactEmail">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="contactEmail" 
                        placeholder="Enter Email"
                        class="form-control <?= isset($formError['email']) ? 'is-invalid' : ''; ?>"
                        value="<?= htmlentities($formData['email'] ?? '')?>"
                    >
                    <?php if (isset($formError['email'])) {
                        echo sprintf('<div class="invalid-feedback show">%s</div>', htmlentities($formError['email']));
                    } ?>
                </div>
                <div class="form-group col-12">
                    <label for="contactAddress">Address</label>
                    <textarea 
                        name="address" 
                        id="contactAddress"
                        class="form-control <?= isset($formError['address']) ? 'is-invalid' : '';?>"
                        placeholder="Enter Address"
                    ><?= htmlentities($formData['address'] ?? '') ?></textarea>
                    <?php if (isset($formError['address'])) {
                        echo sprintf('<div class="invalid-feedback show">%s</div>', nl2br(htmlentities($formError['address'])));
                    } ?>
                </div>
                <input type="hidden" name="id" value="<?= $formData['id'] ?? 0 ?>">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
<hr class="my-5">