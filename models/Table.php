<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table".
 *
 * @property int $id
 * @property string $full_name
 * @property string $contract_number
 * @property string $amount
 * @property string $actual_amount
 * @property string $phone_number
 * @property string $account
 * @property string $payment_date
 * @property string $work_date
 * @property string $employee
 * @property string $update_time
 */
class Table extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'contract_number', 'amount', 'actual_amount', 'phone_number', 'account', 'employee','m_pay'], 'required'],
            [['payment_date', 'work_date', 'update_time'], 'safe'],
            [['full_name'], 'string', 'max' => 125],
            [['contract_number', 'amount', 'actual_amount', 'phone_number', 'account', 'employee'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'full_name' => 'ԱԱՀ',
            'contract_number' => 'Պայմանագրի համարը',
            'amount' => 'Գումարը',
            'actual_amount' => 'Նստած գումարը',
            'phone_number' => 'Հեռախոսի համարը',
            'account' => 'Հաշվեհամար',
            'payment_date' => 'Վճարման ժամանակ',
            'work_date' => 'Աշխատանքի ժամանակ',
            'employee' => 'Աշխատող',
            'm_pay' => 'Ամսական վճար',
//            'update_time' => 'Update Time',
        ];
    }
}
