<?php

namespace App\Models;

class Status
{
    const GRADES = [
        1 => 'Lớp lá',
        2 => 'Lớp 1',
        3 => 'Lớp 2',
        4 => 'Lớp 3',
        5 => 'Lớp 4',
        6 => 'Lớp 5',
        7 => 'Lớp 6',
        8 => 'Lớp 7',
        9 => 'Lớp 8',
        10 => 'Lớp 9',
        11 => 'Lớp 10',
        12 => 'Lớp 11',
        13 => 'Lớp 12',
        14 => 'Luyện thi ĐH - CĐ',
        15 => 'Lớp năng khiếu',
        16 => 'Lớp ngoại ngữ',
        17 => 'Hệ Đại học',
        18 => 'Lớp khác'
    ];

    const SEARCH_GRADES = [
        'Lớp lá' => 'Lớp lá',
        'Lớp 1' => 'Lớp 1',
        'Lớp 2' => 'Lớp 2',
        'Lớp 3' => 'Lớp 3',
        'Lớp 4' => 'Lớp 4',
        'Lớp 5' => 'Lớp 5',
        'Lớp 6' => 'Lớp 6',
        'Lớp 7' => 'Lớp 7',
        'Lớp 8' => 'Lớp 8',
        'Lớp 9' => 'Lớp 9',
        'Lớp 10' => 'Lớp 10',
        'Lớp 11' => 'Lớp 11',
        'Lớp 12' => 'Lớp 12',
        'Luyện thi ĐH - CĐ' => 'Luyện thi ĐH - CĐ',
        'Lớp năng khiếu' => 'Lớp năng khiếu',
        'Lớp ngoại ngữ' => 'Lớp ngoại ngữ',
        'Lớp ngoại ngữ' => 'Hệ Đại học',
        'Lớp khác' => 'Lớp khác'
    ];

    const NUMBERS = [
        1 => '1 buổi',
        2 => '2 buổi',
        3 => '3 buổi',
        4 => '4 buổi',
        5 => '5 buổi',
        6 => '6 buổi',
        7 => '7 buổi'
    ];

    const LEVELS = [
        1 => 'Không có yêu cầu',
        2 => 'Sinh viên',
        3 => 'Sinh viên nam',
        4 => 'Sinh viên nữ',
        5 => 'Giáo viên',
        6 => 'Giáo viên nam',
        7 => 'Giáo viên nữ',
        8 => 'Cử nhân',
        9 => 'Cử nhân nam',
        10 => 'Cử nhân nữ',
        11 => 'Thạc sỹ',
        12 => 'Thạc sỹ nam',
        13 => 'Thạc sỹ nữ',
        14 => 'Tiến sỹ',
        15 => 'Tiến sỹ nam',
        16 => 'Tiến sỹ nữ'
    ];

    const TEACHER_LEVELS = [
        1 => 'Sinh viên',
        2 => 'Giáo viên',
        3 => 'Cử nhân',
        4 => 'Thạc sỹ',
        5 => 'Tiến sỹ'
    ];

    const GENDERS = [
        1 => 'Nam',
        2 => 'Nữ'
    ];

    const TIMES = [
        1 => 'Buổi sáng',
        2 => 'Buổi chiều',
        3 => 'Buổi tối',
        4 => 'Tất cả'
    ];

    const STATUS = [
        0 => 'Cần gấp',
        1 => 'Đã giao lớp'
    ];

    /**
     * @var array
     */
    private $grades;

    /**
     * @var array
     */
    private $numbers;

    /**
     * @var array
     */
    private $levels;

    /**
     * @var array
     */
    private $genders;

    /**
     * @var array
     */
    private $teacher_levels;

    /**
     * @var array
     */
    private $times;

    /**
     * @var array
     */
    private $status;

    /**
     * @var array
     */
    private $search_grades;

    public function __construct()
    {
        $this->grades = self::GRADES;
        $this->numbers = self::NUMBERS;
        $this->levels = self::LEVELS;
        $this->genders = self::GENDERS;
        $this->teacher_levels = self::TEACHER_LEVELS;
        $this->times = self::TIMES;
        $this->status = self::STATUS;
        $this->search_grades = self::SEARCH_GRADES;
    }

    public function grades()
    {
        return $this->grades;
    }

    public function search_grades()
    {
        return $this->search_grades;
    }

    public function numbers()
    {
        return $this->numbers;
    }

    public function levels()
    {
        return $this->levels;
    }

    public function level($value)
    {
        return $this->levels[$value];
    }

    public function genders()
    {
        return $this->genders;
    }

    public function teacher_levels()
    {
        return $this->teacher_levels;
    }

    public function times()
    {
        return $this->times;
    }

    public function time($value)
    {
        return $this->times[$value];
    }

    public function status()
    {
        return $this->status;
    }

    public function statu($value)
    {
        return $this->status[$value];
    }
}
