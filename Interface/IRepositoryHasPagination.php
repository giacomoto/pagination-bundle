<?php

namespace Luckyseven\Bundle\LuckysevenPaginationBundle\Interface;

use Doctrine\ORM\QueryBuilder;
use Luckyseven\Bundle\LuckysevenPaginationBundle\Class\Pagination;

interface IRepositoryHasPagination {
    /**
     * @param Pagination $pagination
     * @param QueryBuilder $queryBuilder
     * @return array
     */
    function paginated(Pagination $pagination, QueryBuilder $queryBuilder): array;

    /**
     * @param QueryBuilder|null $queryBuilder
     * @return int
     */
    function paginatedTotal(?QueryBuilder $queryBuilder = null): int;
}
