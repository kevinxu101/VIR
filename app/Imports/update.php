<?php
   
namespace App\Imports;
   
use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

    
class update implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $post = Contact::find($row['id']);
        $post ->name = $row['name'];
        $post ->email = $row['email'];
        $post->save();
    }
}
?>