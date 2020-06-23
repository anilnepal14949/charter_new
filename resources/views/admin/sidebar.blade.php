@if($postsId == 0)
<div class="col-md-3 left_sidebar">
    <div class="panel panel-default panel-flush panel-left">
        <div class="panel-heading">
            <h2 class="panel-title"> Instructions for Users </h2>
        </div>
        <div class="panel-body">
            <h4>
                1. Please Enter the number according to the list of Titles at the right side of the screen.
                    ( दाँयाभागमा रहेको सेवाको शिर्षक हेरी नम्बर थिच्नुहोस )
            </h4>
            <h4>
                2. Press 'Enter' to get back to homescreen
                    ( कुनैपनि पृष्ठबाट पहिलो पृष्ठमा आउनकोलागि 'Enter'थिच्नुहोस )
            </h4>
        </div>
    </div>
</div>
@else
<div class="col-md-3 left_sidebar">
    <div class="panel panel-default panel-flush panel-left">
        <div class="panel-heading">
            <h2 class="panel-title"> {{ $post->title }} </h2>
        </div>
        <div class="panel-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>
                            क्र.स. :
                        </th>
                        <td>
                            {{ $post->sub_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            समय :
                        </th>
                        <td>
                            {{ $post->duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            संबन्धित व्यक्ति/शाखा :
                        </th>
                        <td>
                            {{ $post->responsible_person }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            गुनासो सुन्ने पदाधिकारी :
                        </th>
                        <td>
                            {{ $post->complain_officer }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
