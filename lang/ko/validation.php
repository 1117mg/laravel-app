<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute을(를) 동의해야 합니다.',
    'accepted_if'            => ':attribute을(를) :other이(가) :value이면 동의해야 합니다.',
    'active_url'             => ':attribute은(는) 유효한 URL이 아닙니다.',
    'after'                  => ':attribute은(는) :date 이후 날짜여야 합니다.',
    'after_or_equal'         => ':attribute은(는) :date 이후 날짜이거나 같은 날짜여야 합니다.',
    'alpha'                  => ':attribute은(는) 문자만 포함할 수 있습니다.',
    'alpha_dash'             => ':attribute은(는) 문자, 숫자, 대쉬(-), 밑줄(_)만 포함할 수 있습니다.',
    'alpha_num'              => ':attribute은(는) 문자와 숫자만 포함할 수 있습니다.',
    'any_of'                 => ':attribute은(는) 유효하지 않습니다.',
    'array'                  => ':attribute은(는) 배열이어야 합니다.',
    'ascii'                  => ':attribute은 1바이트 영숫자 문자와 기호만 포함해야 합니다.',
    'before'                 => ':attribute은(는) :date 이전 날짜여야 합니다.',
    'before_or_equal'        => ':attribute은(는) :date 이전 날짜이거나 같은 날짜여야 합니다.',
    'between'                => [
        'array'   => ':attribute의 항목 수는 :min에서 :max 개의 항목이 있어야 합니다.',
        'file'    => ':attribute의 용량은 :min에서 :max 킬로바이트 사이여야 합니다.',
        'numeric' => ':attribute의 값은 :min에서 :max 사이여야 합니다.',
        'string'  => ':attribute의 길이는 :min에서 :max 문자 사이여야 합니다.',
    ],
    'boolean'                => ':attribute은(는) true 또는 false 이어야 합니다.',
    'can'                    => ':attribute 필드에 승인되지 않은 값이 포함되어 있습니다.',
    'confirmed'              => ':attribute 확인 항목이 일치하지 않습니다.',
    'contains'               => ':attribute 필드에 필수 값이 누락되었습니다.',
    'current_password'       => '패스워드가 일치하지 않습니다.',
    'date'                   => ':attribute은(는) 유효한 날짜가 아닙니다.',
    'date_equals'            => ':attribute은(는) :date과(와) 같은날짜여야합니다.',
    'date_format'            => ':attribute이(가) :format 형식과 일치하지 않습니다.',
    'decimal'                => ':attribute은 소수점 이하 :decimal자리여야 합니다.',
    'declined'               => ':attribute은(는) 거부되어야 합니다.',
    'declined_if'            => ':Other이(가) :value일때 :attribute은(는) 거부되어야 합니다.',
    'different'              => ':attribute와(과) :other은(는) 서로 달라야 합니다.',
    'digits'                 => ':attribute은(는) :digits 자리 숫자여야 합니다.',
    'digits_between'         => ':attribute은(는) :min에서 :max 자리 사이여야 합니다.',
    'dimensions'             => ':attribute은(는) 올바르지 않는 이미지 크기입니다.',
    'distinct'               => ':attribute 필드에 중복된 값이 있습니다.',
    'doesnt_end_with'        => ':attribute은 다음 중 하나로 끝날 수 없습니다: :values.',
    'doesnt_start_with'      => ':attribute은 다음 중 하나로 시작할 수 없습니다: :values.',
    'email'                  => ':attribute은(는) 유효한 이메일 주소여야 합니다.',
    'ends_with'              => ':attribute은(는) 다음 중 하나로 끝나야 합니다: :values.',
    'enum'                   => ':attribute의 값이 잘못되었습니다.',
    'exists'                 => ':attribute이(가) 존재하지 않습니다.',
    'extensions'             => ':attribute 필드에는 다음 확장자 중 하나가 있어야 합니다. :values.',
    'file'                   => ':attribute은(는) 파일이어야 합니다.',
    'filled'                 => ':attribute 필드는 값이 있어야 합니다.',
    'gt'                     => [
        'array'   => ':attribute의 항목 수는 :value개 보다 많아야 합니다.',
        'file'    => ':attribute의 용량은 :value킬로바이트보다 커야 합니다.',
        'numeric' => ':attribute의 값은 :value보다 커야 합니다.',
        'string'  => ':attribute의 길이는 :value보다 길어야 합니다.',
    ],
    'gte'                    => [
        'array'   => ':attribute의 항목 수는 :value개 보다 같거나 많아야 합니다.',
        'file'    => ':attribute의 용량은 :value킬로바이트보다 같거나 커야 합니다.',
        'numeric' => ':attribute의 값은 :value보다 같거나 커야 합니다.',
        'string'  => ':attribute의 길이는 :value보다 같거나 길어야 합니다.',
    ],
    'hex_color'              => ':attribute 필드는 유효한 16진수 색상이어야 합니다.',
    'image'                  => ':attribute은(는) 이미지여야 합니다.',
    'in'                     => '선택된 :attribute은(는) 올바르지 않습니다.',
    'in_array'               => ':attribute 필드는 :other에 존재하지 않습니다.',
    'in_array_keys'          => ':attribute 필드는 다음 중 하나 이상의 키를 포함해야 합니다: :values.',
    'integer'                => ':attribute은(는) 정수여야 합니다.',
    'ip'                     => ':attribute은(는) 유효한 IP 주소여야 합니다.',
    'ipv4'                   => ':attribute은(는) 유효한 IPv4 주소여야 합니다.',
    'ipv6'                   => ':attribute은(는) 유효한 IPv6 주소여야 합니다.',
    'json'                   => ':attribute은(는) JSON 문자열이어야 합니다.',
    'list'                   => ':attribute 필드는 목록이어야 합니다.',
    'lowercase'              => ':attribute은 소문자여야 합니다.',
    'lt'                     => [
        'array'   => ':attribute의 항목 수는 :value개 보다 작아야 합니다.',
        'file'    => ':attribute의 용량은 :value킬로바이트보다 작아야 합니다.',
        'numeric' => ':attribute의 값은 :value보다 작아야 합니다.',
        'string'  => ':attribute의 길이는 :value보다 짧아야 합니다.',
    ],
    'lte'                    => [
        'array'   => ':attribute의 항목 수는 :value개 보다 같거나 작아야 합니다.',
        'file'    => ':attribute의 용량은 :value킬로바이트보다 같거나 작아야 합니다.',
        'numeric' => ':attribute의 값은 :value보다 같거나 작아야 합니다.',
        'string'  => ':attribute의 길이는 :value보다 같거나 짧아야 합니다.',
    ],
    'mac_address'            => ':attribute은(는) 올바른 MAC 주소가 아닙니다.',
    'max'                    => [
        'array'   => ':attribute은(는) :max개보다 많을 수 없습니다.',
        'file'    => ':attribute은(는) :max킬로바이트보다 클 수 없습니다.',
        'numeric' => ':attribute은(는) :max보다 클 수 없습니다.',
        'string'  => ':attribute은(는) :max자보다 클 수 없습니다.',
    ],
    'max_digits'             => ':attribute은 :max자리를 넘지 않아야 합니다.',
    'mimes'                  => ':attribute은(는) 다음의 파일 형식이어야 합니다: :values.',
    'mimetypes'              => ':attribute은(는) 다음의 파일 형식이어야 합니다: :values.',
    'min'                    => [
        'array'   => ':attribute은(는) 최소한 :min개의 항목이 있어야 합니다.',
        'file'    => ':attribute은(는) 최소한 :min킬로바이트이어야 합니다.',
        'numeric' => ':attribute은(는) 최소한 :min이어야 합니다.',
        'string'  => ':attribute은(는) 최소한 :min자이어야 합니다.',
    ],
    'min_digits'             => ':attribute은 :min자리 이상이어야 합니다.',
    'missing'                => ':attribute 필드가 없어야 합니다.',
    'missing_if'             => ':Other이 :value일 때 :attribute 필드는 누락되어야 합니다.',
    'missing_unless'         => ':Other이 :value이 아닌 경우 :attribute 필드는 누락되어야 합니다.',
    'missing_with'           => ':Values이 있는 경우 :attribute 필드는 누락되어야 합니다.',
    'missing_with_all'       => ':Values이 있는 경우 :attribute 필드는 누락되어야 합니다.',
    'multiple_of'            => ':attribute 는 :value 의 배수여야 합니다.',
    'not_in'                 => '선택된 :attribute이(가) 올바르지 않습니다.',
    'not_regex'              => ':attribute의 형식이 올바르지 않습니다.',
    'numeric'                => ':attribute은(는) 숫자여야 합니다.',
    'password'               => [
        'letters'       => ':attribute은 적어도 하나의 문자를 포함해야 합니다.',
        'mixed'         => ':attribute은 적어도 하나의 대문자와 하나의 소문자를 포함해야 합니다.',
        'numbers'       => ':attribute은 적어도 하나의 숫자를 포함해야 합니다.',
        'symbols'       => ':attribute은 적어도 하나의 기호를 포함해야 합니다.',
        'uncompromised' => '주어진 :attribute이 데이터 유출로 나타났습니다. 다른 :attribute개를 선택하세요.',
    ],
    'present'                => ':attribute 필드가 있어야 합니다.',
    'present_if'             => ':other이 :value인 경우 :attribute 필드가 있어야 합니다.',
    'present_unless'         => ':other이 :value이 아닌 이상 :attribute 필드가 있어야 합니다.',
    'present_with'           => ':values이 있으면 :attribute 필드도 있어야 합니다.',
    'present_with_all'       => ':values이 있을 때 :attribute 필드도 있어야 합니다.',
    'prohibited'             => ':attribute (은)는 금지되어 있습니다.',
    'prohibited_if'          => ':attribute (은)는 :other 이(가) :value 인 경우 금지되어 있습니다.',
    'prohibited_if_accepted' => ':attribute 필드는 :other이 허용되면 금지됩니다.',
    'prohibited_if_declined' => ':other이 감소 할 때 :attribute 필드는 금지됩니다.',
    'prohibited_unless'      => ':attribute (은)는 :other 이(가) :value 이(가) 아닌 경우 금지되어 있습니다.',
    'prohibits'              => ':attribute (은)는 :other 을(를) 금지합니다.',
    'regex'                  => ':attribute 형식이 올바르지 않습니다.',
    'required'               => ':attribute 필드는 필수입니다.',
    'required_array_keys'    => ':attribute 필드는 :values에 대한 항목을 포함해야 합니다.',
    'required_if'            => ':Other이(가) :value 일 때 :attribute 필드는 필수입니다.',
    'required_if_accepted'   => ':Other이 승인되면 :attribute 필드가 필요합니다.',
    'required_if_declined'   => ':other이 거부되는 경우 :attribute 필드가 필요합니다.',
    'required_unless'        => ':Other이(가) :values에 없다면 :attribute 필드는 필수입니다.',
    'required_with'          => ':Values이(가) 있는 경우 :attribute 필드는 필수입니다.',
    'required_with_all'      => ':Values이(가) 모두 있는 경우 :attribute 필드는 필수입니다.',
    'required_without'       => ':Values이(가) 없는 경우 :attribute 필드는 필수입니다.',
    'required_without_all'   => ':Values이(가) 모두 없는 경우 :attribute 필드는 필수입니다.',
    'same'                   => ':attribute와(과) :other은(는) 일치해야 합니다.',
    'size'                   => [
        'array'   => ':attribute은(는) :size개의 항목을 포함해야 합니다.',
        'file'    => ':attribute은(는) :size킬로바이트여야 합니다.',
        'numeric' => ':attribute은(는) :size (이)여야 합니다.',
        'string'  => ':attribute은(는) :size자여야 합니다.',
    ],
    'starts_with'            => ':attribute은(는) :values 중 하나로 시작해야 합니다.',
    'string'                 => ':attribute은(는) 문자열이어야 합니다.',
    'timezone'               => ':attribute은(는) 올바른 시간대 이어야 합니다.',
    'ulid'                   => ':attribute은 유효한 ULID여야 합니다.',
    'unique'                 => ':attribute은(는) 이미 사용 중입니다.',
    'uploaded'               => ':attribute을(를) 업로드하지 못했습니다.',
    'uppercase'              => ':attribute은 대문자여야 합니다.',
    'url'                    => ':attribute은(는) 형식은 올바르지 않습니다.',
    'uuid'                   => ':attribute은(는) 유효한UUID여야합니다.',
    'attributes'             => [
        'address'                  => '주소',
        'affiliate_url'            => '제휴 URL',
        'age'                      => '나이',
        'amount'                   => '양',
        'announcement'             => '발표',
        'area'                     => '지역',
        'audience_prize'           => '관객상',
        'audience_winner'          => '관객 투표 우승자',
        'available'                => '사용 가능',
        'birthday'                 => '생일',
        'body'                     => '내용',
        'city'                     => '도시',
        'company'                  => '회사',
        'compilation'              => '편집',
        'concept'                  => '콘셉트',
        'conditions'               => '조건',
        'content'                  => '내용',
        'contest'                  => '콘테스트',
        'country'                  => '국가',
        'cover'                    => '표지',
        'created_at'               => '생성 시간',
        'creator'                  => '작성자',
        'currency'                 => '통화',
        'current_password'         => '현재 비밀번호',
        'customer'                 => '고객',
        'date'                     => '날짜',
        'date_of_birth'            => '생일',
        'dates'                    => '날짜',
        'day'                      => '일',
        'deleted_at'               => '삭제 시간',
        'description'              => '상세설명',
        'display_type'             => '디스플레이 유형',
        'district'                 => '구역',
        'duration'                 => '기간',
        'email'                    => '이메일',
        'excerpt'                  => '발췌',
        'filter'                   => '필터',
        'finished_at'              => '종료 시간',
        'first_name'               => '이름',
        'gender'                   => '성별',
        'grand_prize'              => '대상',
        'group'                    => '그룹',
        'hour'                     => '시',
        'image'                    => '이미지',
        'image_desktop'            => '데스크톱 이미지',
        'image_main'               => '메인 이미지',
        'image_mobile'             => '모바일 이미지',
        'images'                   => '이미지',
        'is_audience_winner'       => '관객 투표 우승 여부',
        'is_hidden'                => '숨김 처리됨',
        'is_subscribed'            => '구독 중',
        'is_visible'               => '표시됨',
        'is_winner'                => '승리 여부',
        'items'                    => '아이템',
        'key'                      => '키',
        'last_name'                => '성',
        'lesson'                   => '수업',
        'line_address_1'           => '주소 1',
        'line_address_2'           => '주소 2',
        'login'                    => '로그인',
        'message'                  => '메시지',
        'middle_name'              => '중간 이름',
        'minute'                   => '분',
        'mobile'                   => '모바일',
        'month'                    => '월',
        'name'                     => '이름',
        'national_code'            => '국가 코드',
        'number'                   => '숫자',
        'password'                 => '비밀번호',
        'password_confirmation'    => '비밀번호 확인',
        'phone'                    => '전화번호',
        'photo'                    => '사진',
        'portfolio'                => '포트폴리오',
        'postal_code'              => '우편 번호',
        'preview'                  => '미리보기',
        'price'                    => '가격',
        'product_id'               => '제품 ID',
        'product_uid'              => '제품 UID',
        'product_uuid'             => '제품 UUID',
        'promo_code'               => '프로모션 코드',
        'province'                 => '주',
        'quantity'                 => '수량',
        'reason'                   => '이유',
        'recaptcha_response_field' => 'reCAPTCHA 응답 필드',
        'referee'                  => '심판',
        'referees'                 => '심판',
        'reject_reason'            => '거부 이유',
        'remember'                 => '기억하기',
        'restored_at'              => '복원 시간',
        'result_text_under_image'  => '이미지 아래의 결과 텍스트',
        'role'                     => '역할',
        'rule'                     => '단일 규칙',
        'rules'                    => '규칙 목록',
        'second'                   => '초',
        'sex'                      => '성별',
        'shipment'                 => '배송',
        'short_text'               => '요약',
        'size'                     => '사이즈',
        'skills'                   => '기술',
        'slug'                     => '슬러그(고유 URL 식별자)',
        'specialization'           => '전문 분야',
        'started_at'               => '시작 시간',
        'state'                    => '상태',
        'status'                   => '상태',
        'street'                   => '도로',
        'student'                  => '학생',
        'subject'                  => '주제',
        'tag'                      => '태그',
        'tags'                     => '태그',
        'teacher'                  => '선생님',
        'terms'                    => '약관',
        'test_description'         => '테스트 설명',
        'test_locale'              => '테스트 로케일',
        'test_name'                => '테스트 이름',
        'text'                     => '텍스트',
        'time'                     => '시간',
        'title'                    => '제목',
        'type'                     => '유형',
        'updated_at'               => '업데이트 시간',
        'user'                     => '사용자',
        'username'                 => '사용자 이름',
        'value'                    => '값',
        'winner'                   => '우승자',
        'work'                     => '업무',
        'year'                     => '년',
    ],
];
