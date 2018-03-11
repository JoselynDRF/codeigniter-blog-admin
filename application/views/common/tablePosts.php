<?php foreach($posts as $post): ?>
  <tr>
    <td> <?= $post->title ?> </td>
    <td> <?= $post->date ?> </td>
    <td> <?= $post->state ?> </td>
    <td>
      <span class="mr-2"><i class="fas fa-pencil-alt"></i></span>
      <span><i class="fas fa-times"></i></span>
    </td>
  </tr>
<?php endforeach; ?>
