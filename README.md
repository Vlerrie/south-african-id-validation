# south-african-id-validation

Validate south african identity numbers and extract limited information about them.

## Usage

Basic Usage
<pre>
    use Vlerrie\SouthAfricanIdValidation\SaIdValidator;

    $idValidator = new SaIdValidator();

    //validate an ID
    $idValidator->validateSaId('0123456789012');
    //returns bool

    //extract more info about idnumber
    $idInfo = $idValidator->extractIdInfo('9410045102086');
    //returns object:
    //{
    //  +"idNumber": "0123456789012"
    //  +"length": true
    //  +"dob": "1994-10-04"
    //  +"age": 27
    //  +"gender": "m"
    //  +"citizen": true
    //  +"validId": true
    //  +"errors": []
    //}
</pre>

Included Laravel rule for validation
<pre>
use Vlerrie\SouthAfricanIdValidation\ValidSAIdRule;


$validated = $request->validate([
            'idNumber' => [
                'required', 
                new ValidSAIdRule()
            ]
        ]);
</pre>
