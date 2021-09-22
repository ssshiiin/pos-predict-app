import * as React from 'react';
import Link from '@mui/material/Link';
import Typography from '@mui/material/Typography';
import Title from './Title';
import { now } from 'lodash';

function preventDefault(event) {
  event.preventDefault();
}

export default function Deposits() {
  return (
    <React.Fragment>
      <Title>明日の売上予測</Title>
      <Typography component="p" variant="h4">
        143.235円
      </Typography>
      <Typography color="text.secondary" sx={{ flex: 1 }}>
        2021年9月17日金曜日
      </Typography>
      <div>
        <Link color="primary" href="#" onClick={preventDefault}>
          今後の売り上げ予測 ＞
        </Link>
      </div>
    </React.Fragment>
  );
}
