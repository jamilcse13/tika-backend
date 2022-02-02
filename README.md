* We have used **laravel/breeze** for managing authorization

### Database & API Model:
#### Model:

- People
  - id_no
  - dob
  - office
  - registered

- Category
  - name
  - min_age

  -Vaccine
    -name
- Division
  - name
- District
  - name
  - division_id
- Upazila
  - name
  - district_id
- Vaccination Center
  - name
  - upazila_id
  - vaccine_name
  - available
- Registration
  - name
  - dob
  - id_no
  - phone_no
  - center_id
  - upcoming_date
  - v1_date
  - v2_date
  - unique_id
  - diabetes

#### Api’s:

- People verify – POST (_/verify_)
  1. category
  2. nid/passport
  3. dob
  
- Verify after registration POST (_/registration_)
  1. Disease check
  2. District
  3. Upazila
  4. Center 
  5. Phone
  6. OTP & Register

- Check registration GET (_/check-registration_)
  1. ID number
  2. dob
  3. OTP  & check

- Tika card GET (_/tika-card_)
  1. ID number
  2. dob
  3. OTP  & generate PDF

- Vaccine Certificate GET (_/get-certificate_)
  1. ID number
  2. OTP & give certificate unique url

- Check certificate GET (_certificate/{unique_id}_)
  1. Redirect to certificate unique URL

