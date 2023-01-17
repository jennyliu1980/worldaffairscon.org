import React from 'react';
import { Link } from 'react-router-dom';
import { Container, Card } from 'react-bootstrap';

import Tech from '../img/plen/tech.jpg';
import Equality from '../img/plen/equality.jpg';
import Media from '../img/plen/media.png';
import Refugee from '../img/plen/refugee.jpg';
import Health from '../img/plen/health.jpg';

const PlenariesCard = (props) => {
  const data = props;
  return (
    <Card>
      <Link to={data.href}>
        <Card.Img className="plen-image" src={data.image} alt="card image" />
        <Card.ImgOverlay className="text-center text-white p-4">
          <Card.Title as="h3">{data.title}</Card.Title>
        </Card.ImgOverlay>
      </Link>
    </Card>
  );
};
const Plenaries = () => {
  return (
    <div id="plenaries">
      <Container className="mt-4">
        <Card>
          <Card.Body className="text-center">
            <h1>Plenary Themes</h1>
          </Card.Body>
        </Card>
        <Card className="mt-3 hero-section">
          <div className="plenarycard-grid">
            <Link className="plenarycard" to="/plenary/health">
              <div
                className="plenarycard__background"
                style={{ backgroundImage: `url(${Health})` }}
              ></div>
              <div className="plenarycard__content">
                <p className="plenarycard__category">Global Health</p>
                <h3 className="plenarycard__heading">
                  From mRNA to Personalized Medicine: The Future of
                  Biotechnology and Healthcare
                </h3>
              </div>
            </Link>
            <Link className="plenarycard" to="/plenary/politics">
              <div
                className="plenarycard__background"
                style={{ backgroundImage: `url(${Media})` }}
              ></div>
              <div className="plenarycard__content">
                <p className="plenarycard__category">Politics</p>
                <h3 className="plenarycard__heading">
                  Politics, Media and Society: A Love-Hate Relationship
                </h3>
              </div>
            </Link>
            <Link className="plenarycard" to="/plenary/tech">
              <div
                className="plenarycard__background"
                style={{ backgroundImage: `url(${Tech})` }}
              ></div>
              <div className="plenarycard__content">
                <p className="plenarycard__category">Tech</p>
                <h3 className="plenarycard__heading">
                  The Metaverse and Beyond: Insight Into the New Information Age
                </h3>
              </div>
            </Link>
            <Link className="plenarycard" to="/plenary/society">
              <div
                className="plenarycard__background"
                style={{ backgroundImage: `url(${Refugee})` }}
              ></div>
              <div className="plenarycard__content">
                <p className="plenarycard__category">Society</p>
                <h3 className="plenarycard__heading">
                  Our Global Society: Service and Visibility, Challenges and
                  Revelations
                </h3>
              </div>
            </Link>
          </div>
        </Card>
      </Container>
    </div>
  );
};
export default Plenaries;
