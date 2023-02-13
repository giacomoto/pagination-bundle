<?php

namespace Luckyseven\Bundle\LuckysevenPaginationBundle\Interface;

use Luckyseven\Bundle\LuckysevenPaginationBundle\Class\PaginatedData;
use Luckyseven\Bundle\LuckysevenPaginationBundle\Class\Pagination;

interface IRepositoryHasPagination {
    function findAllPaginated(Pagination $pagination): PaginatedData;
}
